<?php



/**
 * Auteur : Brahimi Lisa
 * Projet : Paris Exposition
 * Date : 15/11/2026
 * Réalisation : Gestion de l'affichage des actualités,commentaires,
 *               vérification de leur disponibilité et de leur état.
 */
namespace App\Models;

use CodeIgniter\Model;

class Db_model extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }



    public function get_all_compte()
    {
        $resultat = $this->db->query(
            "SELECT cpt_pseudo FROM t_compte_cpt;"
        );
        return $resultat->getResultArray();
    }



    public function get_actualite($numero)
    {
        $requete = "SELECT * FROM t_actualite_act WHERE act_id = ".$numero.";";
        $resultat = $this->db->query($requete);
        return $resultat->getRow();
    }



    public function get_all_actualites()
    {
        $resultat = $this->db->query(
            "SELECT act_id,act_titre,act_etat,act_texte_news, act_date_pub, cpt_pseudo 
             FROM t_actualite_act  
             join t_compte_cpt using (cpt_id)
             where act_etat = 'P';"
        );
        return $resultat->getResultArray();
    }


    public function get_compter_comptes()
    {
        $resultat = $this->db->query(
            "SELECT COUNT(*) AS total FROM t_compte_cpt;"
        );
        return $resultat->getRow();
    }


        public function set_compte($saisie)
    {
            //Récuparation (+ traitement si nécessaire) des données du formulaire
            $login=$saisie['cpt_pseudo'];
            $mot_de_passe=$saisie['cpt_mot_de_passe'];
            $sql="INSERT INTO t_compte_cpt VALUES(NULL,'".$login."','".$mot_de_passe."');";
            return $this->db->query($sql);
    }



    public function get_presentation()
    {
        $resultat = $this->db->query(
            "SELECT *  FROM t_presentation_pre;"
        );
        return $resultat->getRow();
    }



    public function get_all_commentaires()
{
    $resultat = $this->db->query(
    "SELECT cmt_texte, cmt_date, vis_email
    FROM t_commentaire_cmt
    JOIN t_ticket_tic USING (tic_id)
    JOIN t_visiteur_vis USING (vis_id)
    WHERE cmt_moderation = 'A';"
    );

    return $resultat->getResultArray();
}



public function get_ticket($matricule, $mot_de_passe)
{
    $sql = "SELECT tic_id, tic_date_heure, vis_id
            FROM t_ticket_tic
            WHERE tic_matricule = '".$matricule."'
            AND tic_mot_de_passe = '".$mot_de_passe."';";

    $resultat = $this->db->query($sql);

    return $resultat->getRow();
}






public function ajouter_commentaire($tic_id, $mot_de_passe, $texte, $saisie)
{
    $sql = "CALL ajouter_commentaire(?, ?, ?, ?, ?, ?, ?, ?)";

    return $this->db->query($sql, [
        $tic_id,
        $mot_de_passe,
        $texte,
        $saisie['vis_nom'],
        $saisie['vis_prenom'],
        $saisie['vis_departement'],
        $saisie['vis_pays'],
        $saisie['vis_email']
    ]);
}






public function get_all_oeuvres()
{
    $resultat = $this->db->query(
        "SELECT
            oeu_id,
            oeu_titre,
            oeu_image,
            oeu_texte,
            oeu_type,
            oeu_code,
            GROUP_CONCAT(DISTINCT CONCAT(exp_prenom, ' ', exp_nom) SEPARATOR ', ') AS createurs,
            GROUP_CONCAT(DISTINCT lan_libelle SEPARATOR ', ') AS langues
        FROM t_oeuvre_oeu
        LEFT JOIN t_oeuvre_collective_cole USING (oeu_id)
        LEFT JOIN t_exposant_exp USING (exp_id)
        LEFT JOIN t_traduire_tra USING (oeu_id)
        LEFT JOIN t_langue_lan USING (lan_id)
        GROUP BY oeu_id, oeu_titre, oeu_image, oeu_texte, oeu_type;"
    );

    return $resultat->getResultArray();
}






public function get_oeuvre_by_code($code)
{
    $sql = "SELECT oeu_id, oeu_code, oeu_titre, oeu_image, oeu_texte, oeu_type,

                GROUP_CONCAT(
                    DISTINCT CONCAT(exp_prenom, ' ', exp_nom)
                    SEPARATOR ', '
                ) AS createurs
            FROM t_oeuvre_oeu
            LEFT JOIN t_oeuvre_collective_cole USING (oeu_id)
            LEFT JOIN t_exposant_exp USING (exp_id)
            WHERE oeu_code = ?
            GROUP BY oeu_id, oeu_code, oeu_titre, oeu_image, oeu_texte, oeu_type";

    $resultat = $this->db->query($sql, [$code]);

    return $resultat->getRowArray();
}


}









































/** 
public function set_visiteur($saisie)
{
    $nom = $saisie['vis_nom'];
    $prenom = $saisie['vis_prenom'];
    $departement = $saisie['vis_departement'];
    $pays = $saisie['vis_pays'];
    $email = $saisie['vis_email'];

    $sql = "INSERT INTO t_visiteur_vis
            (vis_nom, vis_prenom, vis_departement, vis_pays, vis_email)
            VALUES ('".$nom."', '".$prenom."', '".$departement."', '".$pays."', '".$email."');";

    $this->db->query($sql);

    return $this->db->insertID();
}

public function set_visiteur_ticket($tic_id, $vis_id)
{
    $sql = "UPDATE t_ticket_tic
            SET vis_id = ".$vis_id."
            WHERE tic_id = ".$tic_id.";";

    return $this->db->query($sql);
}




public function set_commentaire($tic_id, $texte)
{
    $sql = "INSERT INTO t_commentaire_cmt
            (tic_id, cmt_texte, cmt_date, cmt_moderation)
            VALUES (".$tic_id.", '".$texte."', NOW(), 'A');";

    return $this->db->query($sql);
}

*/