<?php
include 'header&footer/header.php';
include 'conn.php';
$file = scandir("pdf_files");

if (isset($_POST['submit'])) {
    $email_id = htmlspecialchars($_POST['email_id']);
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $query = "INSERT INTO `tbl_comment`(`comment_id`, `email_id`, `name`, `comment`) VALUES ('null','$email_id','$name','$comment')";
    if ($conn) {
        if ($email_id != null && $name != null && $comment != null) {
            mysqli_query($conn, $query);
            echo '<script> alert("Your Comment is Sucessfully Submited") </script>';
        } else {
            echo '<script> alert("Your comment is Not Sucessfully Submited")</script>';
        }
    }
}
?>
<link rel="stylesheet" href="css/style19.css">
</head>

<body>
    <section class="sec1">
        <h1>All the recent notice and news are display here</h1>
    </section>
    <section class="sec2">
        <div class="show">
            <div class="mass">
                <h2>Our site private policy</h2>
            </div>
            <div class="buttn">
                <a target="_blank" href="pdf_files/<?php echo $file[2] ?>"><button type="button" class="btn btn-secondary">Read</button></a>
                <a download="<?php echo $file[2] ?>" href="<?php echo $file[2] ?>"><button type="button" class="btn btn-primary">Download</button></a>
            </div>
        </div>
        <div class="show">
            <div class="mass">
                <h2>The procedure for an appionment</h2>
            </div>
            <div class="buttn">
                <a target="_blank" href="pdf_files/<?php echo $file[3] ?>"><button type="button" class="btn btn-secondary">Read</button></a>
                <a download="<?php echo $file[3] ?>" href="<?php echo $file[3] ?>"><button type="button" class="btn btn-primary">Download</button></a>
            </div>
        </div>
        <div class="show">
            <div class="mass">
                <h2>about covid-19 details</h2>
            </div>
            <div class="buttn">
                <a target="_blank" href="pdf_files/<?php echo $file[4] ?>"><button type="button" class="btn btn-secondary">Read</button></a>
                <a download="<?php echo $file[4] ?>" href="<?php echo $file[4] ?>"><button type="button" class="btn btn-primary">Download</button></a>
            </div>
        </div>
        <div class="show">
            <div class="mass">
                <h2>How to make masks from cloth</h2>
            </div>
            <div class="buttn">
                <a target="_blank" href="pdf_files/<?php echo $file[5] ?>"><button type="button" class="btn btn-secondary">Read</button></a>
                <a download="<?php echo $file[5] ?>" href="<?php echo $file[5] ?>"><button type="button" class="btn btn-primary">Download</button></a>
            </div>
        </div>
    </section>
    <div class="newshead">
        <h2>News Feed</h2>
    </div>
    <section class="sec3">
        <div class="newsfeed">
            <div class="news">
                <p class="mb-0"> <a style="text-decoration: none;" target="_blank" href="https://health.economictimes.indiatimes.com/news/pharma/moderna-phase-3-covid-19-vaccine-trial-could-still-begin-in-july/76771665">click to learn more</a> </p>
                <h5>Moderna phase 3 Covid-19 vaccine trial could still begin in July</h5>
            </div>
            <div class="news">
                <p class="mb-0"><a style="text-decoration: none; text-align: center;" target="_blank" href="https://health.economictimes.indiatimes.com/news/policy/kerala-government-to-decentralize-swab-collection/76768238">click to learn more</a></p>
                <h5>Kerala government to decentralize swab collection</h5>
            </div>
            <div class="news">
                <p class="mb-0"><a style="text-decoration: none;" target="_blank" href="https://health.economictimes.indiatimes.com/news/policy/covid-19-health-ministry-issues-revised-home-isolation-guidelines/76767874">click to learn more</a></p>
                <h5>COVID-19: Health Ministry issues revised home isolation guidelines</h5>
            </div>
            <div class="news">
                <p class="mb-0"><a style="text-decoration: none;" target="_blank" href="https://health.economictimes.indiatimes.com/news/industry/covid-testing-to-hit-1-cr-mark-soon/76764241">click to learn more</a></p>
                <h5>Covid testing to hit 1-cr mark soon</h5>
            </div>
            <div class="news">
                <p class="mb-0"><a style="text-decoration: none;" target="_blank" href="https://health.economictimes.indiatimes.com/news/industry/mental-health-suicide-prevention-needs-greater-attention-during-pandemic-who/76750122">click to learn more</a></p>
                <h5>Mental health, suicide prevention needs greater attention during pandemic: WHO</h5>
            </div>
            <div class="news">
                <p class="mb-0"><a style="text-decoration: none;" target="_blank" href="https://www.yourbrainonporn.com/">click to learn more</a></p>
                <h5>How porn harm your mental health and make this socity sick</h5>
            </div>
            <div class="news">
                <p class="mb-0"><a style="text-decoration: none;" target="_blank" href="https://www.yourbrainonporn.com/">click to learn more</a></p>
                <h5>How porn harm your mental health and make this socity sick</h5>
            </div>
            <div class="news">
                <p class="mb-0"><a style="text-decoration: none;" target="_blank" href="https://www.yourbrainonporn.com/">click to learn more</a></p>
                <h5>How porn harm your mental health and make this socity sick</h5>
            </div>
        </div>
        <div class="comment">
            <h3>Make a comment</h3>
            <div class="container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="margin-left: 2.5rem">
                    <fieldset>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Full-Name">
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea">Comment Area</label>
                            <textarea class="form-control" id="exampleTextarea" name="comment" rows="6"></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <section class="sec4">
        <h1>Indian Health Portal</h1>
    </section>
</body>

</html>