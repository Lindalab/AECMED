drop database if exists aecdb;
create database  aecdb;
use  aecdb;

CREATE TABLE department (
  department_id int(11) NOT NULL,
  deparment_name varchar(80) NOT NULL
) ;


-- 1 -students
-- 2 - Alumni
-- 3 - Mentors
-- 4 -Admin
--Gender
-- 0 - other
-- 1 - Female
-- 2 - Male
CREATE TABLE stakeholder (
  stakeholder_id int(11) NOT NULL,
  first_name varchar(20) DEFAULT NULL,
  last_name varchar(20) DEFAULT NULL,
  stakeholderRole int(11) NOT NULL,
  gender int(3) NOT NULL DEFAULT 0,
  email varchar(50) NOT NULL UNIQUE,
  phone_number varchar(15) NOT NULL UNIQUE
) ;



-- 1 -Internal
-- 2 -External

CREATE TABLE grants (
  grant_id int(11) NOT NULL primary key auto_increment,
  grant_name varchar(50) NOT NULL,
  grant_type int(3) NOT NULL,
  date_received date NOT NULL,
  grant_description varchar(600),
  grant_company_image varchar(100) NOT NULL,
  department_id int(11) NOT NULL,
  amount double NOT NULL,
  
) ;

-- 1 -Active
-- 2 - Inactive
-- 3 - Completed
CREATE TABLE project (
  project_id int(11) NOT NULL,
  project_name varchar(50) NOT NULL,
  project_description varchar(300) NOT NULL,
  project_status int(3) NOT NULL,
  date_started date NOT NULL,
  sdg_goals varchar(15) NOT NULL,
  department_id int(11) NOT NULL,
  sector varchar(60) NOT NULL
) ;


CREATE TABLE event (
  event_id int(11) NOT NULL,
  event_name varchar(60) NOT NULL,
  date_organized date NOT NULL,
  target_group varchar(20) NOT NULL,
  event_description varchar(300) NOT NULL,
  male_attendance int(11) NOT NULL,
  female_attendace int(11) NOT NULL,
  event_type varchar(20) NOT NULL,
  department_id int(11) NOT NULL
) ;


-- 1 -profit
-- 2 - Non- profit
-- 3 - Hybrid
CREATE TABLE business (
  business_id int(11) NOT NULL,
  date_started date NOT NULL,
  busines_name varchar(50) DEFAULT NULL unique,
  business_location varchar(50) DEFAULT NULL,
  number_of_employees int(11) NOT NULL,
  formalised_structure varchar(100) NOT NULL,
  sector_of_business varchar(60) NOT NULL,
  sdg_alignment varchar(15) NOT NULL,
  department_id int(11) NOT NULL,
  business_type int(3) DEFAULT 0,
  business_description varchar(100) NOT NULL
  
); 




CREATE TABLE project_grants (
  grant_id int(11) NOT NULL,
  project_id int(11) NOT NULL,
  amount double NOT NULL,
  
);

CREATE TABLE business_grants (
  grant_id int(11) NOT NULL,
  business_id int(11) NOT NULL,
  amount double NOT NULL,
  
);

CREATE TABLE events_grants (
  grant_id int(11) NOT NULL,
  event_id int(11) NOT NULL,
  amount double NOT NULL,
  
);



CREATE TABLE business_revenue (
   business_id int(11) NOT NULL,
   revenue_amount double,
   revenue_year year
  
);



-- 1 -Active
-- 0 - Inactive
-- 2 - Suspended
CREATE TABLE course (
  course_id int(11) NOT NULL,
  course_name varchar(50) NOT NULL,
  date_started date NOT NULL,
  course_description varchar(300) NOT NULL,
  course_status int(3) NOT NULL,
  department_id int(11) NOT NULL
) ;

CREATE TABLE course_project (
  course_id int(11) NOT NULL,
  project_id int(11) NOT NULL, 
);

CREATE TABLE course_student (
  course_id int(11) NOT NULL,
  numberoffemaleStudent int(11) NOT NULL,
  numberofmaleStudent int(11) NOT NULL,
 course_year year, 
);


CREATE TABLE module (
  module_id int(11) NOT NULL,
  module_name varchar(50) NOT NULL,
  module_description varchar(100) NOT NULL,
  department_id int(11) NOT NULL
) ;



CREATE TABLE stakeholder_business (
  stakeholder_id int(11) NOT NULL,
  business_id int(11) NOT NULL
 
) ;


CREATE TABLE stakeholder_modules (
  stakeholder_id int(11) NOT NULL,
  module_id int(11) NOT NULL
  
) ;

CREATE TABLE stakeholder_project (
  stakeholder_id int(11) NOT NULL,
  project_id int(11) NOT NULL
) ;







CREATE TABLE clubs (
  club_id int NOT NULL primary key auto_increment,
  club_name varchar(50) NOT NULL,
  club_description varchar(100) NOT NULL,
  date_registered date NOT NULL,
  department int NOT NULL,
  lead_name varchar(30) DEFAULT NULL,
  foreign key (department) references department (department_id)
) ;

CREATE TABLE club_members (
     club_id int NOT NULL
  number_of_executives int NOT NULL,
  number_of_members int NOT NULL,
  number_of_females int NOT NULL,
  number_of_males int NOT NULL,
  lead_name varchar(30) DEFAULT NULL,
  year year not null
);












CREATE TABLE club_event (
  club_id int NOT NULL,
  event_id int NOT NULL,
  date date NOT NULL,
   foreign key (club_id ) references clubs(club_id),
    foreign key (event_id ) references event(event_id) 
) ;


CREATE TABLE club_project (
  club_id int NOT NULL,
  project_id int NOT NULL,
  foreign key (club_id ) references clubs(club_id),
  foreign key ( project_id ) references project( project_id)
) ;



CREATE TABLE course_faculty (
  stakeholder_id int NOT NULL,
  course_id int NOT NULL,
   foreign key ( stakeholder_id ) references stakeholder( stakeholder_id),
   foreign key ( course_id  ) references course( course_id )
) ;


CREATE TABLE Cohort(
  cohort_id int(11) NOT NULL,
  cohort_name varchar(50) NOT NULL,
  cohort_year year NOT NULL
)

CREATE TABLE cohort_business(
  business_id int(11) NOT NULL,
 cohort_id int(11) NOT NULl
)

CREATE TABLE cohort_business(
  course_id int(11) NOT NULL,
 grant_id int(11) NOT NUL
)


Course grant table
Cohort table
cohort id
cohot name
cohort year


 cohort business Table
 business_id
 cohort _id










