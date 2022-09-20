CREATE DATABASE real_estate_db;

CREATE TABLE user 
(
    id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    username VARCHAR(20) NOT NULL,
    email VARCHAR(60) NOT NULL,
    user_type BOOLEAN  NOT NULL,
    password VARCHAR(60) NOT NULL,
    isActive BOOLEAN NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL,
    PRIMARY KEY (id)
);   

CREATE TABLE tenant
(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    phone_number INT(10) NOT NULL,
    email VARCHAR(60) NOT NULL,
    password VARCHAR(60) NOT NULL,
    isActive BOOLEAN NOT NULL DEFAULT 1,
    created_at TIMESTAMP NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE piece_detail
(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    salons INT(5) NOT NULL,
    rooms INT(5) NOT NULL,
    bath_rooms INT(5) NOT NULL,
    swimming_pools INT(2) NOT NULL
)

CREATE TABLE property
(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    address TEXT(300) UNSIGNED NOT NULL,
    piece_detail_id INT(11) NOT NULL,
    description TEXT(500) NOT NULL,
    price FLOAT NOT NULL,
    isFree BOOLEAN NOT NULL DEFAULT 1,
    PRIMARY KEY (id)
    FOREIGN KEY (piece_detail_id) REFERENCES piece_detail (id)
);

CREATE TABLE booking
(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    in_date DATETIME NOT NULL,
    out_date DATETIME NOT NULL,
    property_id INT(11) UNSIGNED NOT NULL,
    tenant_id INT(11) UNSIGNED NOT NULL
    PRIMARY KEY (id),
    FOREIGN KEY property_id REFERENCES property (id),
    FOREIGN KEY tenant_id REFERENCES tenant (id)
)