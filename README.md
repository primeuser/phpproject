# phpproject


1.DDL( Data Definition Language):
 create, drop, alter, rename 


2. DML ( Data Manipulation language):
 Select --> Retrieve 
 insert --> Create
 update --> Update
 delete 
 merge 


3. TCL ( Transaction control Language): 

commit 
rollback 
set transaction 

4. Data Control Language (DCL)

read access , R/W access, access 

 grant, revoke 


// insert query 

 insert into blog ( title, details ) VALUES ( 'Dr. Yubaraj Khatiwoda to be the Embassador for USA', 'Government of Nepal is about to appoint Dr. Yubaraja khatiwoda as Embassador of USA for Nepal');


// select query  // * -> all 

select * from blog where id ='1';
select * from blog where id ='2' or title = 'KP oli';
select * from blog where id ='2' and title = 'KP oli';

// update query 

update blog set title = 'Dr. Govinda K.C', details = 'He is a great social activist.' where id = '2';

// delete query

delete from blog where title = 'Dr. Govinda K.C';