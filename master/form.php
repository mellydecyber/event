
                        <?php
                        if($teks->kecepatan == '2'){
                            ?>
                        <div class="col-md-12 form-group">
                                            <label>Kecepatan</label>
                                <select class='form-control' name='kecepatan'>
                                    <option value='2' selected >Pelan</option>
                                    <option value='5'>Sedang</option>
                                    <option value='8'>Cepat</option>  
                                    <option value='10'>Sangat Cepat</option>
                                    <option value='15'>Sangat Sangat Cepat</option>        
                                </select>
                                </div>  
                            <?php
                        }elseif($teks->kecepatan == '5'){
                            ?>
                            
                            <div class="col-md-12 form-group">
                                            <label>Kecepatan</label>
                                <select class='form-control' name='kecepatan'>
                                    <option value='2'  >Pelan</option>
                                    <option value='5' selected>Sedang</option>
                                    <option value='8'>Cepat</option>  
                                    <option value='10'>Sangat Cepat</option>
                                    <option value='15'>Sangat Sangat Cepat</option>        
                                </select>            
                                </div>  
                            <?php
                        }elseif($teks->kecepatan == '8'){
                            ?>
                            <div class="col-md-12 form-group">
                                            <label>Kecepatan</label>
                                <select class='form-control' name='kecepatan'>
                                    <option value='2'  >Pelan</option>
                                    <option value='5' >Sedang</option>
                                    <option value='8' selected>Cepat</option>  
                                    <option value='10'>Sangat Cepat</option>
                                    <option value='15'>Sangat Sangat Cepat</option>        
                                </select>
                                </div>  
                            <?php
                        }elseif($teks->kecepatan == '10'){
                            ?>
                            <div class="col-md-12 form-group">
                                            <label>Kecepatan</label>
                                <select class='form-control' name='kecepatan'>
                                    <option value='2'  >Pelan</option>
                                    <option value='5' >Sedang</option>
                                    <option value='8'>Cepat</option>  
                                    <option value='10' selected>Sangat Cepat</option>
                                    <option value='15'>Sangat Sangat Cepat</option>        
                                </select>      
                                </div>  
                            <?php
                        }elseif($teks->kecepatan == '15'){
                            ?>
                            <div class="col-md-12 form-group">
                                            <label>Kecepatan</label>
                                <select class='form-control' name='kecepatan'>
                                    <option value='2'  >Pelan</option>
                                    <option value='5' selected>Sedang</option>
                                    <option value='8'>Cepat</option>  
                                    <option value='10'>Sangat Cepat</option>
                                    <option value='15' selected>Sangat Sangat Cepat</option>        
                                </select>            
                                </div>  
                        <?php } ?>
                                    <?php
                        if($teks->warna_bg == 'Black'){
                            ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black' selected >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>
                    <?php
                    }elseif($teks->warna_bg == 'White'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black' >Hitam</option>
                            <option value='White' selected>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>
                    <?php
                    }elseif($teks->warna_bg == 'blue'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue' selected>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>
                    <?php
                    }elseif($teks->warna_bg == 'skyblue'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue' selected>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'Red'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red' selected>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'yellow'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow' selected>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'gray'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray' selected>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'Maroon'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon' selected>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'green'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green' selected>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'lime'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime' selected>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'navy'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy' selected>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'purple'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple' selected>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_bg == 'teal'){
                        ?>
                    <div class="col-md-12 form-group">
                                                        <label>Warna Background</label>
                        <select class='form-control' name='warna_bg'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal' selected>Teal</option> 
                        </select>
                    </div>
                    <?php } ?>







                    <?php
                        if($teks->warna_teks == 'Black'){
                            ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black' selected >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>
                    <?php
                    }elseif($teks->warna_teks == 'White'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black' >Hitam</option>
                            <option value='White' selected>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>
                    <?php
                    }elseif($teks->warna_teks == 'blue'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue' selected>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>
                    <?php
                    }elseif($teks->warna_teks == 'skyblue'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue' selected>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'Red'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red' selected>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'yellow'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow' selected>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'gray'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray' selected>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'Maroon'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black' >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon' selected>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'green'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green' selected>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'lime'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime' selected>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'navy'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy' selected>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'purple'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple' selected>Ungu</option>
                            <option value='teal'>Teal</option> 
                        </select>
                    </div>  <?php
                    }elseif($teks->warna_teks == 'teal'){
                        ?>
                    
                        
                        <div class="col-md-12 form-group">                                             <label>Warna Tulisan</label>
                        <select class='form-control' name='warna_teks'>
                            <option value='Black'  >Hitam</option>
                            <option value='White'>Putih</option> 
                            <option value='blue'>Biru</option> 
                            <option value='skyblue'>Biru Muda</option>
                            <option value='Red'>Merah</option>
                            <option value='yellow'>Kuning</option>
                            <option value='gray'>Abu-Abu</option>
                            <option value='Maroon'>Maroon</option>
                            <option value='green'>Hijau</option>
                            <option value='lime'>Hijau Muda</option>
                            <option value='navy'>Navy</option>
                            <option value='purple'>Ungu</option>
                            <option value='teal' selected>Teal</option> 
                        </select>
                    </div>
                    <?php } ?>

                                       