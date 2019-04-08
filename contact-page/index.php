<!DOCTYPE html>
<html>

<head>

    <title>Susisiekime!</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

    <div class="container">

        <div class="parallax-container">
            <div class="parallax"><img src="images/restaurant.jpg"></div>
        </div>

        <div class="reservation-container row">

            <h1>Rezervacija</h1>

            <div class="reservation-form-container row">

                <div class="reservation-form col s12 m12 l9">

                    <form id="form" method="POST">

                        <div class="inputs-area row">
                        
                            <div class="inputs col s12 m6 l6">

                                <div class="inputs-write">

                                    <input type="text" id="vardas" placeholder="Vardas *" required>
                                    <input type="email" id="email" placeholder="vardas@email.com *" required>
                                    <input type="text" id="telefonas" placeholder="Telefonas">
                                    
                                </div>   

                                <div class="inputs-select">

                                    <input id="datepicker" type="text" id="data" class="datepicker picker-field" placeholder="Data *" required>
                                    <input id="timepicker" type="text" id="laikas" class="timepicker picker-field" placeholder="Laikas *" required>

                                    <select id="select" id="sveciai" class="input-field" required="required">
                                      <option value="" disabled selected>Svečiai *</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">>10</option>
                                  </select>

                                </div>

                            </div>

                            <div class="textarea col s12 m6 l6">                          

                                <textarea id="zinute" placeholder="Jūsų žinutė..."></textarea>

                            </div>  

                        </div>

                        <div class="send-button col s12">

                            <button class="btn waves-effect waves-light red lighten-3" type="submit" name="action">Siųsti
                                <i class="material-icons right">send</i>
                            </button>

                        </div>

                    </form>

                </div>


                <div class="contact-info col s12 m12 l3">

                    <blockquote>

                        <span class="bold">Darbo laikas:</span><br><br>
                        I – III<br>
                        07:00 – 15:00<br><br>
                        IV – VII<br>
                        18:00 – 23:00<br><br><br>

                        Tel.:<span class="bold"> +37060000000</span> <br>
                        El. paštas:<span class="bold"> virtuves@kodas.lt</span> <br>
                            
                    </blockquote>

                </div>

            </div>

        </div>


        <div id="address-container">

            <h2>Mus rasite</h2>

            <div class="address-map-container row">

                <div class="map col s12 m6 l9">

                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2306.8000737382126!2d25.286610534918207!3d54.67794718559828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x339c214c808e9e41!2zVsWhxK4gVmlsbmlhdXMgcm90dcWhxJc!5e0!3m2!1sen!2slt!4v1552677819137" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>

                <div class="address col s12 m6 l3">

                    <blockquote>

                        <span class="bold">Didžioji g. 31,<br>
                        Vilnius</span><br>
                        01128<br>
                            
                    </blockquote>

                </div>

            </div>

        </div>

    </div>

<script type="text/javascript" src="scripts/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>