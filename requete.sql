#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id_user Int  Auto_increment  NOT NULL ,
        prenom  Varchar NOT NULL ,
        nom     Varchar (15) NOT NULL ,
        pseudo  Varchar (15) NOT NULL ,
        pwd     Varchar (15) NOT NULL ,
        profil  Varchar (10) NOT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;

#--Insertion des données de deux utilisateurs

INSERT INTO `utilisateur` (`id_user`, `prenom`, `nom`, `pseudo`, `pwd`, `profil`)VALUES 
('001', 'Amath', 'Biteye', 'abiteye66', 'a1822', 'admin'),
('002', 'Saliou', 'Niang', 'zale', 's2088', 'joueur'),
('003', 'Seydi', 'Cisse', 'babali', 's6150', 'admin'),
('004', 'Birame', 'Ndoye', 'bndoye', 'b4969', 'joueur');




