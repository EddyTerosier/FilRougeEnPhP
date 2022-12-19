<?php
?>

<div class="col-md-4">
               <div class="card mb-4 text-white bg-dark">
                  <img class="card-img-top" src={`http://localhost:3000/img/${programme.image}`} alt="Card"/>
                  <div class="card-body">
                     <h5 class="card-title">{ programme.name }</h5>
                     <p class="card-text">{ programme.texte }</p>
                     <a href="#" className="btn btn-outline-custom btn-sm btn-read-more">{programme.texte_btn}</a>
                  </div>
               </div>
            </div>