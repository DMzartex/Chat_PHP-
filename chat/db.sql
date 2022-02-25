create table conversations(
 convId int PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE users_conversations(
   	usersConversationId int PRIMARY KEY AUTO_INCREMENT,
	usersId int,
    convId int,
    FOREIGN KEY (usersId) REFERENCES users(usersId),
    FOREIGN KEY (convId) REFERENCES conversations(convId),
);