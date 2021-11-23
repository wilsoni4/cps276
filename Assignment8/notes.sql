CREATE TABLE note_table
(
  note_id int  NOT NULL AUTO_INCREMENT,
  note_date timestamp  NOT NULL ,
  note_content char(255) NOT NULL ,
  PRIMARY KEY (note_id)
) ENGINE=InnoDB;