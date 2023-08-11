CREATE TABLE IF NOT EXISTS infohandler 
(
`ID` INT(10) AUTO_INCREMENT UNIQUE,
`PostID` INT(10),
`Datatype` VARCHAR(80),
`ItemDescription` VARCHAR(300),
`RelAtr1` VARCHAR(1000),
`RelAtr2` VARCHAR(1000),
`RelAtr3` VARCHAR(1000),
`RelAtr4` VARCHAR(1000),
`RelAtr5` VARCHAR(1000),
`RelAtr6` VARCHAR(1000),
`RelAtr7` VARCHAR(1000),
`RelAtr8` VARCHAR(1000),
`RelAtr9` VARCHAR(1000),
`RelAtr0` VARCHAR(1000)
) ENGINE=InnoDB AUTO_INCREMENT=3330 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
INSERT INTO infohandler 
(PostID,Datatype,ItemDescription,RelAtr1,RelAtr2,RelAtr3,RelAtr4,RelAtr5) VALUES 
(5,'LIST',"direktori kontaktandmed","Изабелла Рийтсаар","Директор","621 1611","direktor@pae.tln.edu.ee",""),
(5,'LIST',"direktori kontaktandmed","Светлана Каст","HEV координатор","621 1984","s.borodavko@pae.tln.edu.ee",""),
(5,'LIST',"direktori kontaktandmed","Наталия Преснецова","Заведующая учебной частью программы погружения","623 1223","n.voronova@pae.tln.edu.ee",""),
(5,'LIST',"direktori kontaktandmed","Павел Алонов","Руководитель по проектам, учитель","623 1223","p.alonov@pae.tln.edu.ee",""),
(5,'LIST',"direktori kontaktandmed","Оксана Шеленёва","Заведующая учебной частью ","623 1223 ","o.selenjova@pae.tln.edu.ee",""),
(5,'LIST',"direktori kontaktandmed","Валентина Диденко","Заведующая хозяйственной частью","621 1963","majajuht@pae.tln.edu.ee",""),
(5,'LIST',"direktori kontaktandmed","Леа Лойде ","Заведующая канцелярией","621 0230","pae@pae.tln.edu.ee",""),
(5,'LIST',"direktori kontaktandmed","Анна Луйк","Руководитель по интересам","621 1963","a.hurm@pae.tln.edu.ee","")
;
