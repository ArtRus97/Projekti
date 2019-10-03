create database projekti;

  use projekti;

  create table asiakas(
    id_asiakas INT auto_increment primary key,
    nimi VARCHAR(30),
    salasana VARCHAR(255)
  ) Engine=InnoDB;
