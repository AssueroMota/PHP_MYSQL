create DATABASE ManPrevLito;
use ManPrevLito;
create table Man_Prev_Lito(
Id integer primary key auto_increment,
Nome varchar(30),
Setor varchar(30),
Email varchar(30),
Contato varchar (11),
Observacao varchar(90),
Ultima_Revisao varchar(30),
Proxima_Revisao varchar(30)
);

select * from Man_Prev_Lito;
