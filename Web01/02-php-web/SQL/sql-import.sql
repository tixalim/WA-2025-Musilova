CREATE TABLE wa_test(
    id int AUTO_INCREMENT primary key,
    user_name varchar(50) not null,
    user_surname varchar(50) not null,
    user_email varchar(100) not null unique,
    user_age int default null,
    registration_date timestamp default current_timestamp
);