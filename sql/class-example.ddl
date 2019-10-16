drop table if exists restaurant;
drop table if exists reservation;
drop table if exists user;

create table user (
	userId binary(16) not null,
	userEmail varchar(128) not null,
	userHash char(97) not null,
	unique(userEmail),
	index(userEmail),
	primary key(userId)
);


create table restaurant(
	 restaurantId binary(16) not null,
	 restaurantName varchar(128) not null,
	 restaurantFoodType varchar(97) not null,
	 index(restaurantName),
	 index(restaurantFoodType)
	primary key(restaurantId)
);

create table reservation(
	reservationUserId binary(16),
	reservationRestaurantId binary(16),
	reservationDateandTime varchar(128)
	foreign key(reservationUserId) references user(userId),
	foreign key(reservationRestaurantId) references restaurant(restaurantId),
	primary key(reservationUserId, reservationRestaurantId)

);
