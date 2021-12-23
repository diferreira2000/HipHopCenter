
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('css/homepage.css')}}">
    

    <title>Hip-hop Center</title>
</head>
<body>

    <div id="mainContainer">

        <div id="topContainer">

            <div id="navBarContainer">
                <nav class="navBar">

                    <div class="group">
                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Search
                                <img src="{{url('images/search.png')}}" class="icon" alt="Search">
                            </a>
                        </div>

                    </div>

                    <div class="group">
                        <div class="navItem">
                            <a href="browse.php" class="navItemLink">Browse</a>
                        </div>

                        <div class="navItem">
                            <a href="yourMusic.php" class="navItemLink">Your Music</a>
                        </div>

                        <div class="navItem">
                            <a href="profile.php" class="navItemLink">{{ auth()->user()->name }}</a>
                        </div>

                        <div class="navItem">
                        
                            <a class="logout"  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                                      
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        </div>

                    </div>

                </nav>
            </div>
        </div>

        <div id="mainViewContainer">
            <div id="mainContent">
                
                <h1 class="recomenda">O Hip-hop Center recomenda</h1>

                <div class="gridViewContainer">
                    @foreach($albuns as $album)         
                       <div class="gridViewItem">                           
                            <img src="{{ asset('storage/capa/'.$album->capa) }}" alt="Album artwork">                     
                            
                            <div class="gridViewInfo">
                                {{ $album->nome }}
                            </div>
                        </div>
                    @endforeach
                </div>

                  
                        
        
            </div>
        </div>


        <div id="aTocarAgoraContainer">

            <div id="aTocarAgoraBar">

                <div id="aTocarAgoraEsquerda">
                    <div class="content"> 
                        <span class="albumLink">
                            <img src="https://media-exp1.licdn.com/dms/image/C4D03AQHMSBaUrwLY5w/profile-displayphoto-shrink_800_800/0/1605460001084?e=1645660800&v=beta&t=H5mcF-mMZFrjJ1CLvQjMQ3O1Nb_EnF_xsYBmcKFLYKE" alt="album" class="albumArtwork">
                        </span>

                        <div class="infoMusica">

                            <span class="nomeMusica">
                                <span>Xerecrazy Castle VC</span>
                            </span>

                            <span class="artistaMusica">
                                <span>McLawyer</span>
                            </span>

                        </div>


                    </div>
                </div>

                <div id="aTocarAgoraCentro">

                    <div class="content playerControls">   
                        <div class="buttons">
                            <button class="controlButton shuffle" title="Shuffle button">
                                <img src="{{url('images/shuffle.png')}}" alt="shuffle">
                            </button>

                            <button class="controlButton previous" title="Previous button">
                                <img src="{{url('images/previous.png')}}" alt="previous">
                            </button>

                            <button class="controlButton play" title="Play button">
                                <img src="{{url('images/play.png')}}" alt="play">
                            </button>

                            <button class="controlButton pause" title="Pause button" style="display:none">
                                <img src="{{url('images/pause.png')}}" alt="pause">
                            </button>

                            <button class="controlButton next" title="Next button">
                                <img src="{{url('images/next.png')}}" alt="next">
                            </button>

                            <button class="controlButton repeat" title="Repeat button">
                                <img src="{{url('images/repeat.png')}}" alt="repeat">
                            </button>
                        </div>

                        <div class="playbackBar">
                            <span class="progressTime current">0.00</span>
                            <div class="progressBar">
                                <div class="progressBarbackground">

                                </div>
                            </div>
                            <span class="progressTime remaining">0.00</span>
                        </div>
                    </div>

                </div>

                <div id="aTocarAgoraDireita">
                    <div class="volumeBar">
                        <button class="controlButton volume" title="Volume button">
                            <img src="{{url('images/volume.png')}}" alt="volume">
                        </button>

                        <div class="progressBar">
                            <div class="progressBarbackground">

                            </div>
                        </div>

                    </div>
                </div>

        </div>

      
    </div>

    

    
</body>

</html>