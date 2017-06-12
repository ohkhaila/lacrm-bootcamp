<?php
    function getPost(){
        $Post = array(
            0=>array(
                "PostId"=>0,
                "Title"=>"Hi, I'm Kay!",
                "Body"=>"<h2>What is this place?
                <p>Kay is the creator of this website, an online community of people who are on a journey towards understanding, appreciation, and unity of ourselves.
                Here we are working to improve ourselves which will end in countless improvements in every aspect of our lives. (purpose)

                (how it started/my inspiration)

                (future goals for site and maybe self)</p> </h2>"
            ),
            1=>array(
                "PostId"=>1,
                "Title"=>"Lets Get Healthy!!",
                "Body"=>"<h2> First I want to start by saying that our specific details of what it means to be healthy can be different.
                In fact, they should be different! But we are all striving to be healthy mentally, physically, and emotionally.</p>"
            ),
            2=>array(
                "PostId"=>2,
                "Title"=>"Treat Yo Self",
                "Body"=>"<h2>Too often I find myself cutting out things that I enjoy because I have other commitments. So I have been trying
                to get away from that habit because I would fins that I had not done anything for myself in 2 or 3 weeks! There is a lot of
                value in spending time with yourself and doing things for yourself. Nothing is more important in your life than you. I mean that.
                Without you, you could not do ANY of the things that you do. SO take care of you! Take yourself out, walk in the park, take a nap,
                whatever you want to do. I challenge you to take 3 hours out of your week to do things that make you feel good.</p>"
            )
        );
        return $Post;
    }
// "html".php."html".php;
    function getAllPost() {
        $Post = getPost();
        foreach($Post as $indiv){
            // $indiv['title']
            echo "
            <a href='view_post.php?PostId=".$indiv['PostId']."'>".$indiv['Title']."</a>";
        }
    }

    function SeePost($PostId) {
        $Post = getPost();
        echo $Post[$PostId]['Title'];
        echo $Post[$PostId]['Body'];

    }
