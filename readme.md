Movie Review Sentiment Analysis Database ReadMe
=====================


This code is designed to create a MySql database from the TXT files in the Pang Lee polarity dataset (http://www.cs.cornell.edu/people/pabo/movie-review-data/) It's distributed under MIT license.

----------


Getting Started
---------

Download  http://www.cs.cornell.edu/people/pabo/movie-review-data/review_polarity.tar.gz

Put the pos and neg folders into the same folder as insert.php.

create the table from movie_sentiment.sql

Edit insert.php with the proper MySql credentials.

Run insert.php

Done. The database should be in MySql with each review in a text column and its sentiment marked pos/neg.

