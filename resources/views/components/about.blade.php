<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="about-img">
                                        <img src="img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Name: </span> <span>Gurcam Gencehan</span></p>
                                        <p><span class="title-s">Profile: </span> <span>full stack
                                                developer</span></p>
                                        <p><span class="title-s">Email: </span>
                                            <span>gencehangurcam@gmail.com</span>
                                        </p>
                                        <p><span class="title-s">Phone: </span> <span>+32485592162</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">
                                <p class="title-s">Skill</p>
                                @foreach ($about as $about)
                                <span>{{ $about->competence }}</span> <span class="pull-right">{{ $about->level }}%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:{{ $about->level }}%"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        About me
                                    </h5>
                                </div>
                                <p class="lead">
                                    I am a young developper, I always want to learn more, I am dynamic I manage the
                                    digital aspect in
                                    a versatile way, from the creation
                                    of site to the creation of pub, logo, community manager.
                                </p>
                                <p class="lead">
                                    what more to say about me, I am quite sociable, I like to work in team, do not hesitate
                                    to contact
                                    me in the contact page,
                                    I will be happy to help you for anything, or if you just have a question
                                </p>
                                <p class="lead">
                                    Feel free to browse the site, see our services, we are professional, hope to see you soon,
                                    do not hesitate
                                    to launch your project,
                                    and use our services!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
