CREATE TABLE Client (
	num_assure SERIAL NOT NULL, 
	noms VARCHAR(20), 
	prenoms VARCHAR(30), 
	adresse VARCHAR(40), 
	type VARCHAR(20), 
	contact BIGINT,
	email VARCHAR(50) UNIQUE,
	password VARCHAR(10) UNIQUE,
	image BYTEA,
	image_type VARCHAR(20),
	PRIMARY KEY (num_assure)); 
	
CREATE TABLE Police (
	num_police SERIAL NOT NULL,
	clauses TEXT, 
	duree INTEGER, 
	PRIMARY KEY (num_police) );
	
CREATE TABLE Vehicule (
	matricule INTEGER NOT NULL, 
	type_voiture VARCHAR(40), 
	marque VARCHAR(20), 
	modele VARCHAR(20), 
	puissance INTEGER, 
	num_assure INT NOT NULL, 
	num_police INT NOT NULL, 
	PRIMARY KEY (matricule),
	FOREIGN KEY(num_assure) REFERENCES Client ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY(num_police) REFERENCES Police ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Conducteur (
	id_conducteur SERIAL NOT NULL, 
	nom VARCHAR(20), 
	prenom VARCHAR(30), 
	adresse_c VARCHAR(40), 
	contact_c BIGINT,
	vehicule_mat VARCHAR(10),
	FOREIGN KEY(vehicule_mat) REFERENCES vehicule(matricule) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (id_conducteur) );


CREATE TABLE Expert (
	id_expert SERIAL NOT NULL, 
	nom_exp VARCHAR(20), 
	prenoms_exp VARCHAR(30), 
	adresse_exp VARCHAR(40), 
	contact_exp BIGINT, 
	PRIMARY KEY (id_expert) );

CREATE TABLE Sinistre (
	num_dossier SERIAL NOT NULL, 
	date_ouverture DATE, 
	circonstances TEXT, 
	montant_estime NUMERIC(7,2), 
	montant_paye NUMERIC(7,2), 
	id_expert INT NOT NULL, 
	PRIMARY KEY (num_dossier),
	FOREIGN KEY (id_expert) REFERENCES Expert ON UPDATE CASCADE ON DELETE CASCADE 
);


CREATE TABLE RattachementContrat (
	num_contrat SERIAL NOT NULL,
	num_assure int  NOT NULL,
	num_police INT NOT NULL, 
	num_dossier INT NOT NULL, 
	PRIMARY KEY (num_contrat) ,
	FOREIGN KEY(num_assure) REFERENCES Client ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY(num_police) REFERENCES Police ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY(num_dossier) REFERENCES Sinistre ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE notification(
	num SERIAL NOT NULL,
	id_client INT NOT NULL,
	message TEXT NOT NULL,
	dt_message DATE NOT NULL,
	FOREIGN KEY(id_client) REFERENCES Client(num_assure) ON DELETE CASCADE
);