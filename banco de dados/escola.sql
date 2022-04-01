ALTER table aluno ADD FOREIGN KEY(cep) REFERENCES cep(cep);

ALTER TABLE turma ADD CONSTRAINT turma_fk FOREIGN 
KEY(cod_sala) REFERENCES sala(cod_sala) ON DELETE 
RESTRICT ON UPDATE RESTRICT;

ALTER TABLE serie_disciplina ADD FOREIGN KEY
(cod_disciplina) REFERENCES disciplina(cod_disciplina);

ALTER TABLE serie_disciplina ADD FOREIGN KEY
(cod_serie) REFERENCES serie(cod_serie);

ALTER TABLE turma ADD FOREIGN KEY (cod_serie)
REFERENCES serie (cod_serie);

ALTER TABLE turma ADD turno CHAR(1);

ALTER TABLE turma MODIFY ano INT(4) NOT NULL;

ALTER TABLE turma CHANGE ano periodo INT(4) NOT NULL;

ALTER TABLE turma DROP FOREIGN KEY turma_fk;

ALTER TABLE turma DROP COLUMN cod_sala;

DROP TABLE sala;

