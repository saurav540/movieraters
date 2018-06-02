
/* to create movie table*/

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `plot` varchar(250) NOT NULL,
  `director` varchar(250) NOT NULL,
  `actor` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


  /*to create image table*/


CREATE TABLE IF NOT EXISTS `tbl_images` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;



ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

  /*to create actor table*/

  CREATE TABLE `tbl_actor` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `bio` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



ALTER TABLE `tbl_actor`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

  /*to create director table*/

  CREATE TABLE `tbl_director` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `bio` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



ALTER TABLE `tbl_director`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;