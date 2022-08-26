-- Show all pokemons
 SELECT * FROM pokemons;

--  Show a column 
SELECT name FROM pokemons;

-- Show many columns
SELECT id, name, speed,  FROM pokemons;

-- Show values distintcs 
SELECT DISTINCT type from pokemons;

-- Show registers whit specific value
SELECT * FROM pokemons WHERE type = 'Water';

-- Or
SELECT * 
FROM pokemons
WHERE type = 'Water'
OR type = 'Electric';

-- More than
SELECT * 
FROM pokemons
WHERE strength > 1000;

-- Different
SELECT * FROM pokemons WHERE type <>/*!=*/ 'Water';

-- And &&
SELECT * FROM pokemons WHERE type = 'Water' AND speed > 80;

-- Between
SELECT * FROM pokemons WHERE stamina Between 200 And 300;

-- Order By: ascendant
SELECT * FROM pokemons ORDER BY strength;

SELECT * FROM pokemons ORDER BY strength ASC;

-- Order By: descendant
SELECT * FROM pokemons ORDER BY strength DESC;

SELECT * FROM pokemons WHERE speed>100 ORDER BY speed DESC;

-- LIMIT 
SELECT * FROM pokemons LIMIT 10;
SELECT * FROM pokemons LIMIT 10 OFFSET 10;
SELECT * FROM pokemons LIMIT 10, 10;

-- LIKE: Search (Show all records init wht A)
SELECT * from pokemons WHERE type LIKE "W%";

-- Show all results that ends whts 'c'
SELECT * from pokemons WHERE type LIKE "%c";

-- Show all results that contains 'ma'
SELECT * from pokemons WHERE name LIKE "%ma%";

-- Show results 'Pikachu'
SELECT * from pokemons WHERE name LIKE "P_k_c_u";

-- Show all results that not contains 'ma'
SELECT * from pokemons WHERE name NOT LIKE "%ma%";

-- Show results whit many values using 'IN'
SELECT * from pokemons WHERE type IN('Fire', 'Electric');


-- inner join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
INNER JOIN gyms
ON trainers.gym_id = gyms.id
INNER JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

-- left join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

-- Rigth join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
RIGHT JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
RIGHT JOIN pokemons
ON pokemons.trainer_id = trainers.id;

-- Join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

-- Create View
CREATE VIEW view_pokemons AS
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

-- Show view
SELECT * from view_pokemons
