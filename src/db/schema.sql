CREATE TABLE Games (
    game_id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    publisher VARCHAR(255) NOT NULL,
    rating DECIMAL(3, 1) NOT NULL,
    players INT NOT NULL
);

INSERT INTO games (title, publisher, rating, number_of_players) VALUES ('Doom', 'Id', 4, 64)";