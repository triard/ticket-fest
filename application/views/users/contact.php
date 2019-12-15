<div class="container-fluid">
  <style>
     
      .title{
        height: auto;
        font-weight: bold;
        text-shadow: 1px 2px 1px white;
        background-color: #ff8a18;
         text-align: center; 
         box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
        padding: 10px;
         border: 2px solid rgb(97, 91, 91);
          font-family: 'Odibee Sans', cursive;
      }
      .title h2{
        font-size: 100px;
      }
      #sub-title{
        text-shadow: 1px 2px 1px white;
        margin-left: 600px;
        text-align: left;
        font-family: 'Bebas Neue', cursive;
        font-size: 40px;
        font-weight: bold ;
      }


  </style>
    <div class="card-1">
            <div class="title">
                <h2>CONTACT AND LOCATION</h2>
            </div>
                <div class="d-flex">
                        <div class="p-2 flex-fill" style="color: #ffffff; height: 400px; width: 30%; background-color: #159d8c; font-family: 'Roboto Condensed', sans-serif;  text-align:justify;">
                            <h3 style="font-family: 'Bebas Neue', cursive; margin: 70px 0px 5px 200px;"><u>Address</u></h3>
                               <p style="text-align: justify; margin: 40px 0px 5px 160px;">
                                500 Terry Francois St. <br>
                                
                                    San Francisco, CA 94158 <br>
                                    
                                    Parking is available on site
                               </p> 
                                
                        </div>
                        <div class="p-2 flex-fill" style="width: 70%; background-color: #159d8c; padding: 5px;">
                            
                                <!-- elemen untuk menampilkan peta -->
                                <div id="map"></div>
                               
                        </div>
                </div>
            
    </div>
    <div class="card-2">
        <div class="d-flex">
            <div class="p-2 flex-fill" style="width: 30%; background-color: #159d8c; color: white;">
                            <h3 style="font-family: 'Bebas Neue', cursive; margin: 70px 0px 5px 200px;"><u>CONTACT US</u></h3>
                            <p style="text-align: justify; margin: 40px 0px 5px 160px;">
                                    Looking to host a private party or book your band to play at The Launch? We’re open for business - please send us an email or give us a call for details.
                                    <br><br>
                                    Tel: 123-456-7890 <br>
                                    Email: info@mysite.com</p>
                            </p>

            </div>
            <div class="p-2 flex-fill" style="width: 70%; background-color: #159d8c;">
                <div class="col-md-5" style="margin: 40px 0px 0px 400px; background-color: #ff8a18; padding: 20px;">
                        <form>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="email">
                                      </div>
                                      <div class="form-group">
                                            <label for="comment" style="color: white;">Comment:</label>
                                            <textarea class="form-control" rows="5" id="comment" placeholder="your message"></textarea>
                                          </div>
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            Open modal
                                          </button>
                                        
                                          <!-- The Modal -->
                                          <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                 Thank your attention  
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                              </form>
                </div><br>
            </div>
        </div>
        </div>
    </div>
    <script>

        function initMap() {
          
          // membuat objek untuk titik koordinat
          var lombok = {lat: -8.5830695, lng: 116.3202515};
          
          // membuat objek peta
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: lombok
          });
  
          // mebuat konten untuk info window
          var contentString = '<h2>Hello Dunia!</h2>';
  
          // membuat objek info window
          var infowindow = new google.maps.InfoWindow({
            content: contentString,
            position: lombok
          });
          
          // membuat marker
          var marker = new google.maps.Marker({
            position: lombok,
            map: map,
            title: 'Pulau Lombok'
          });
          
          // event saat marker diklik
          marker.addListener('click', function() {
            // tampilkan info window di atas marker
            infowindow.open(map, marker);
          });
          
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?callback=initMap">
      </script>