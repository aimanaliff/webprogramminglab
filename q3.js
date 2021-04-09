var movies = [
  {
    title: "In Bruges",
    rating: 5,
    hasWatched: true,
  },
  {
    title: "Frozen",
    rating: 4.5,
    hasWatched: true,
  },
  {
    title: "Mad Max Fury Road",
    rating: 5,
    hasWatched: true,
  },
  {
    title: "Les Miserable",
    rating: 3.5,
    hasWatched: true,
  },
];

movies.forEach(function (movie) {
  var result = "You have ";
  if (movie.hasWatched) {
    result += "watched ";
  } else {
    result += " not seen ";
  }

  result += '"' + movie.title + '" - ';
  result += movie.rating + " stars";
  console.log(result);
});
