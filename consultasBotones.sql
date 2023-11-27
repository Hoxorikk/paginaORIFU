SELECT * FROM platos where ID = 27;
delete from categoria where nombre = "postres"; 
create table platos(
ID int NOT NULL,
nombre varchar(50),
precio int,
foto varchar(200),
categoria_idbotones int,
restaurantes varchar(50),
descripcion varchar(1000),
primary key (ID)
);
/*CATEGORIAS*/
insert into categoria values (1, "POSTRES");
insert into categoria values (2, "PASTAS");
insert into categoria values (3, "PLATOS");
insert into categoria values (4, "SNACKS");
insert into categoria values (5, "BEBIAS");

/*POSTRES*/
insert into platos values (1, "Dango", 1900, "dango.jpg", 1, "Lovepik", "¡Ricos y soft para disfrutar en un día primaveral!");
insert into platos values (2, "Manju", 1900, "Manju.jpg", 1, "Mercat", "Manjus típicos, exportados desde Asia. Relleno de porotos negros. ¡Sabores únicos!");
insert into platos values (3, "Mizu Yokan", 1800, "mizu_yokan.jpeg", 1, "Misuku", "¡Bocaditos de chocolate para deleitar tu paladar exquisito!");
insert into platos values (4, "Mochi", 2100, "mochis.jpg", 1, "PenTan", "¡Ricos y soft para disfrutar en un día primaveral!");
insert into platos values (5, "BingSu", 2500, "mr_wingsu.webp", 1, "Rahmir", "¡Refrescante y esencial para un día de verano!");
insert into platos values (6, "Sakura Mochi", 2300, "sakura-mochi.jpg", 1, "Lovepik", "¡Ricos y soft para disfrutar en un día primaveral!");
insert into platos values (7, "Wagasi", 1100, "wagasi.png", 1, "Happy", "¡Ricos, crocantes por fuera, blandos por dentro!");
insert into platos values (8, "Moon Cake", 1200, "Mooncake.jpg", 1, "Malduh", "Moon Cakes típicos, exportados desde Asia. Relleno de porotos negros. ¡Sabores únicos!");
insert into platos values (9, "Cheesecake", 2400, "cheescake.webp", 1, "Dragon Restaurant", "Suave y agradable al paladar.");

/*PASTAS*/
insert into platos values (10, "Fideos de arroz", 5680, "fideos-de-arroz-verduras-soya.jpg_.webp", 2, "Dragon Restaurant", "Fideos largos, finos y transparentes. ¡Hechos con una técnica perfeccionada de Japón!");
insert into platos values (11, "ShuiJiao", 4050, "gyozas.jpg", 2, "Misuku", "¡Bocaditos de felicidad!");
insert into platos values (12, "JianJiao", 4500, "tallarines_chinos.jpeg", 2, "Misuku", "Fideos largos, anchos y DELEITANTES. Provenientes de la cultura China");
insert into platos values (13, "PanTiao", 6680, "pantiao.jpg", 2, "Misuku", "Fideos largos, anchos y DELEITANTES. ¡Hechos con una técnica perfeccionada de Japón!");
insert into platos values (14, "Ramen", 6000, "ramen2-570x458.jpg", 2, "Dragon Restaurant", "Fideos deliciosos, embutidos en un caldo de pollo con diferentes ingredientes como huevo, narutos, carne de cerdo...");
insert into platos values (15, "JiaoZi", 3050, "Jiaozi.jpg", 2, "Lovepik", "¡Bocaditos de felicidad!");
insert into platos values (16, "NiuRouMian", 4600, "niuroumian.jpg", 2, "Lovepik", "Fideos chinos, acompañadas con carne de vaca, marinada en salsa de soja");
insert into platos values (17, "Salteado", 3800, "tofu+salteado+con+verduras.jpg", 2, "Dragon Restaurant", "Salteados de verduras, con tofu.");
insert into platos values (18, "WanTan", 3500, "wontonfrito.jpg", 2, "Dragon Restaurant", "Dumplings fritos rellenos de verduras traidas de Himalaya");

/*PLATOS*/
insert into platos values (19, "Pollo al Curri", 5100, "arroz-con-pollo-al-curry.jpg", 3,"Malduh", "Pollo marinado en un curri sasonado con distintas especias provenientes de la India. Acompañado con arroz y una pisca de semillas de sésamo. PICANTE MUY PICANTE.");
insert into platos values (20, "BaoZi", 3200, "baozi.jpg", 3, "PenTan", "¡Pan relleno de carne y amor! cocinado al vapor.");
insert into platos values (21, "Bibimbap", 5600, "bibimbap.jpg", 3, "Misuku", "¡Todo lo rico servido en un plato! Carne de res, huevo, verduras...");
insert into platos values (22, "Mantu",5230 , "Mantu---SK-Khazana.webp", 3, "PenTan", "Mini ravioles gourmets bañados en una crema blanco sasonado con unas distintas especias que te llevarán a sentir y ver el mundo como Rattatuile.");
insert into platos values (23, "Pez Alo", 3599, "pez_alo_nuevo_chino.jpg", 3, "Rahmir","¡Pez que te dice Alo! ¡Celebra el año nuevo chino en este restaurante multicultural!");
insert into platos values (24, "Pollo a la naranja", 4000, "pollo_a_la_naranja.jpg", 3, "Malduh", "Pollo, naranja, una combinacion de sabores inexplicables.");
insert into platos values (25, "Kimchi",2400 , "receta-de-kimchi-vegetariano.jpg", 3, "Happy", "Verdura Coreana añejada durante 3 largos meses. ¡PICANTE MUY PICANTE! HOT HOT HOT HOT HOT");
insert into platos values (26, "Sushi", 7999, "sushi.webp", 3, "Misuku", "Plato de la gastronomía japonesa con base de arroz condimentado con vinagre y azúcar");
insert into platos values (27, "Tonkatsu", 3700, "Tonkatsu.jpg", 3, "PenTan", "Chuleta de cerdo, rico rico ñomñom");

/*SNACKS*/
insert into platos values (28, "Arrolladito primavera", 500, "arrollo_primavera.jpeg", 4, "ChunTian", "Deja que estos sabores te envuelvan como el arrolladito primaveral");
insert into platos values (29, "Arrollado primavera", 700, "arrolladito_primavera.jpg", 4, "ChunTian", "Deja que estos sabores te envuelvan como el arrolladito primaveral");
insert into platos values (30, "Mantou", 1200, "โต๊ะจีนหมั่นโถว.jpg", 4, "Happy", "¡Ricos y soft para acompañar los mejores platos!");
insert into platos values (31, "Gua bao",2800 , "img47161.jpg", 4, "ChunTian", "¡Sandwich asiático irresistible!");
insert into platos values (32, "Guck gi", 1700, "images.jpeg", 4, "ChunTian", "¡Sandwich asiático irresistible!");
insert into platos values (33, "Onigiri", 1699, "descarga.jpeg", 4, "Happy", "Triángulo de arroz, envuelto en una hoja fina de alga seca, relleno de salmón y palta refrescante.");
insert into platos values (34, "Corn Dog",2400 , "perritos-calientes-coreanos.jpg", 4, "Happy", "Salchicha envuelta en masa de maíz frito.");
insert into platos values (35, "Takoyaki", 7999, "bandeja_takoyaki-1040x693.jpg", 4, "ChunTian", "Bolas de harina de trigo, rellenas de pulpo. ¡Ciertamente no apto para celíacos!");
insert into platos values (36, "Brocetas Indias",1430 , "receta-brochetas-de-pollo-murg-tikka-01.webp", 4, "Happy", "¡Brochetas deliciosas!");
/*BEBIDAS*/
insert into platos values (37, "Bubble Tea", 2200, "bubble-tea.jpeg", 5, "Happy", "Innovacion en té, con pequeñas bolitas gomosas.");
insert into platos values (38, "Lassi", 1800, "Lassi-de-yogur.jpg", 5, "ChunTian","Refrescante, esencial para un caluroso día de verano.");
insert into platos values (39, "Matcha Green Tea", 1200, "matcha.jpg", 5, "PenTan","Amargura y dulzura entrelazadas formando esta exquisita infusión.");
insert into platos values (40, "Ramune Drink", 4000, "ramune-bebida-japonesa.jpg", 5, "Happy", "Bebida para que los niños de la casa se diviertan.");
insert into platos values (41, "Sake", 2800, "sake.jpeg", 5, "Dragon Restaurant", "Bebida alcoholica típica japonesa. SOLO para mayores de 18 años.");
insert into platos values (42, "Yakult", 1890, "Yogurt-líquido.jpg", 5, "ChunTian","Rico yogurt similar al griego ideal para acompañar una rica granola.");
insert into platos values (43, "Red Ice Tea", 2000, "冰.jpeg", 5, "Happy","Té frío hecho de flores rojas esecialmente seleccionadas para obtener el mejor sabor.");
insert into platos values (44, "Winter melon punch", 4000, "東瓜察.jpeg", 5, "Happy", "Jugo de calabaza verde china");
insert into platos values (45, "MiJiu", 4500, "Bebidas-alcoholicas-mijiu-1.jpg", 5, "Misuku", "Bebida alcoholica típica coreana. SOLO para mayores de 18 años.");