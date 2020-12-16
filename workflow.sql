create table proceso (
codFlujo varchar(3),
codProceso varchar(4),
codProcesoSiguiente varchar(4),
tipo varchar(1),
codRol varchar(4),
pantalla varchar(20)
);
insert into proceso values ('F1','P1','P2','I','E','averiguar.inc.php');
insert into proceso values ('F1','P2','P3','P','E','alistar.inc.php');
insert into proceso values ('F1','P3','P4','P','E','pagar.inc.php');
insert into proceso values ('F1','P4','P5','D','E','presentar.inc.php');
insert into proceso values ('F1','P5',null,'C','B','verificarPago.inc.php');

create table seguimiento (
nroTramite int,
codFlujo varchar(3),
codProceso varchar(4),
codUsuario varchar(10),
fechaIni date,
fechaFin date
);

insert into seguimiento values (100,'F1','P1','joel','01-04-2020','01-04-2020');
insert into seguimiento values (100,'F1','P2','joel','01-04-2020','01-04-2020');
insert into seguimiento values (100,'F1','P3','joel','01-04-2020','01-04-2020');
insert into seguimiento values (210,'F1','P1','Rebeca','01-04-2020',null);
insert into seguimiento values (511,'F1','P1','joel','01-04-2020',null);


create table alumno (
ci varchar(10),
nombre varchar(100),
apellidos varchar(100),
matricula varchar(10),
primary key(ci)
);

INSERT INTO alumno VALUES ('91996001','Joel','Mendoza','51548844');
INSERT INTO alumno VALUES ('96011844','Rebeca','Rojas','55464561');
INSERT INTO alumno VALUES ('91513185','Alan','Coronel','54646547');
INSERT INTO academico.alumno VALUES ('91996551','Roberto','Huaral','13548442');
