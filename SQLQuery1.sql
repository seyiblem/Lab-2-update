insert into Phonebook
values ('6475987614', 'Yuko', 'Ono', '18 ching chun street, markham, ontario', 'yuko@gmail.com');

insert into Phonebook
values ('6489008765', 'Tom', 'Clancy', '20 silver lane street, toronto, ontario', 'tomclancy@gmail.com');

insert into Phonebook
values ('6475986784', 'Steven', 'Spielberg', '20 beverly hills, los angeles, california', 'stevenspielberg@gmail.com');

insert into Phonebook
values ('5679087614', 'Nobi', 'md', '20 westmore drive, toronto, ontario', 'mdnobi@gmail.com');

insert into Phonebook
values ('1234567891', 'Jack', 'Bauer', '40 brando drive, miami, miami', 'jackbauer@gmail.com');

select TelNo,fname,lname from Phonebook;

delete from Phonebook
where fname = 'Tom';

select * into Phone_book_copy
from Phonebook;

