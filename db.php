

 CREATE TABLE images (
image_id INTEGER NOT NULL AUTO_INCREMENT,
image_caption VARCHAR(255) NOT NULL,
image_username VARCHAR(255) NOT NULL,
image_filename VARCHAR(255) NOT NULL,
image_date DATE NOT NULL,
PRIMARY KEY (image_id)
);