create table department (
dep_id number(20),
dep_name varchar2(10) not null,
year number(10),
class varchar2(10),
constraint pk_dep primary key(dep_id)
);

create table course (
course_code number(6) ,
course_name varchar2(15) not null ,
dep_id number(20) ,
constraint pk_course primary key(course_code),
constraint fk_course foreign key(dep_id)
references department(dep_id)
);

create table material (
mat_id number(20),
mat_name varchar2(20) not null ,
mat_type varchar2(10) ,
mat_size number(10),
mat_year number(4) ,
last_mod varchar2(15) ,
course_code number(6),
constraint pk_mat primary key(mat_id),
constraint fk_mat foreign key(course_code)
references course(course_code)
);

create table academic_staff (
as_id number(20),
as_pass number(10),
as_email varchar2(30),
fst_name varchar2(20) not null,
lst_name varchar2(20) not null,
constraint pk_as primary key(as_id)
);

create table access(
mat_id number(20),
as_id number(20) ,
constraint pk_access primary key(mat_id , as_id),
constraint fk_dep foreign key(mat_id)
references material(mat_id),
constraint fk_dep2 foreign key(as_id)
references academic_staff(as_id)
);

create table follow (
course_code number(6),
as_id number(20),
constraint pk_follow primary key(course_code , as_id),
constraint fk_follow foreign key(course_code)
references course(course_code),
constraint pk_follow2 foreign key(as_id)
references academic_staff(as_id)
);

create table view (
course_code number(6),
as_id number(20),
constraint pk_view primary key(course_code , as_id),
constraint fk_view foreign key(course_code)
references course(course_code),
constraint pk_view2 foreign key(as_id)
references academic_staff(as_id)
);

create table announcement (
course_code number(6),
ann_id number(20),
description varchar2(100000) not null,
date varchar2(12),
constraint pk_ann primary key(course_code,ann_id),
constraint fk_ann foreign key(course_code)
references course(course_code)
);

create table notify (
course_code number(6),
ann_id number(20),
as_id number(20),
constraint pk_notify primary key(course_code,ann_id),
constraint fk_notify foreign key(course_code)
references course(course_code),
constraint fk_notify foreign key(ann_id)
references announcement(ann_id)
);

create table team_member (
mobile_no number(12) ,
mem_name varchar2(20) not null,
email varchar2(100),
course_code number(6),
constraint pk_tm primary key(mobile_no),
constraint fk_tm foreign key(course_code)
references course(course_code)
);

create table graduation_project (
course_code number(6),
doctor varchar2(20) not null,
teacher_ass varchar2(20),
sponsor varchar2(20),
constraint pk_gp primary key(course_code)
constraint fk_gp foreign key(course_code)
references course(course_code)
);