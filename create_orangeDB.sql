CREATE TABLE pinfo (
    pinfoID    numeric(4) not null,
    fname   varchar(15) not null,
    lname   varchar(15),
    email   varchar(30) not null,
    primary key(pinfoID)
);

CREATE TABLE user (
    userID  numeric(4) not null,
    uName   varchar(30) not null,
    passwd  varchar(30) not null,
    pinfoID    numeric(4) not null,
    Role    varchar(5) not null,
    primary key(userId),
    foreign key(pinfoID) references pinfo(pinfoID)
);

CREATE TABLE slides (
    slideID numeric(4) not null,
    bgColor varchar(16) not null,
    grid    numeric(2) not null,
    transition  numeric(2) not null,
    primary key(slideID)
);

CREATE TABLE widgets (
    widgetID    numeric(4) not null,
    type    varchar(15) not null,
    content varchar(256),
    slideID numeric(4) not null,
    primary key(widgetID),
    foreign key(slideID) references slides(slideID)
);
