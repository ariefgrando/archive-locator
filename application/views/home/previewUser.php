<!-- Registration form - START -->
<div class="container">
    <div class="row">
			<?php echo form_open('user/register/preview/'); ?>
            <div class="col-lg-12" style='background: linear-gradient(to right, #F9F9F9 0%, #F9F9F9 100%)'>
				<div>&nbsp;</div>

                <div class="form-group">
                    <label for="InputName">1. Tingkat Pendidikan</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							echo strtoupper($this->input->post("tingkatpendidikan"));
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">2. Jurusan ( Silakan Pilih Tingkat Pendidikan Telebih Dahulu )</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$options = array(
							  '00'  => 'Pilih Jurusan',
							);
							$style = 'style="font-family:courier new" class="form-control" id="subject"';
							echo form_dropdown('jurusan', $options, '', $style);
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">3. IPK</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'ipk',
							  'id'          => 'ipk',
							  'class'       => 'form-control',
							  "required"=>"required"
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">4. Nama Lengkap</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							echo strtoupper($this->input->post("name"));
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">5. Tempat Lahir</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'tempatlahir',
							  'id'          => 'tempatlahir',
							  'class'       => 'form-control',
							  "required"=>"required"
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">6. Tanggal Lahir</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data=array();
							for($t=0; $t<32; $t++){
								if($t=="0"){
									$data[]="Pilih Tanggal Lahir";
								}else{
									$data[]=$t;
								}
							}
							$style = 'class="form-control"';
							echo form_dropdown('tanggallahir', $data, '', $style);
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">7. Bulan Lahir</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data=array();
							for($b=0; $b<13; $b++){
								if($b=="0"){
									$data[]="Pilih Bulan Lahir";
								}else{
									$data[]=$b;
								}
							}
							$style = 'class="form-control"';
							echo form_dropdown('bulanlahir', $data, '', $style);
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">8. Tahun Lahir</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data=array('Pilih Tahun Lahir');
							$style = 'class="form-control" id="thnlhr"';
							echo form_dropdown('tahunlahir', $data, '', $style);
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">9. No. KTP</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'ktp',
							  'id'          => 'ktp',
							  'class'       => 'form-control',
							  "required"=>"required"
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">10. Alamat sesuai KTP</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'alamatktp',
							  'id'          => 'alamatktp',
							  'class'       => 'form-control',
							  "required"=>"required"
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">11. Kota / Kabupaten sesuai KTP</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'kotaktp',
							  'id'          => 'kotaktp',
							  'class'       => 'form-control',
							  "required"=>"required"
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">12. Kode POS</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'pos',
							  'id'          => 'pos',
							  'class'       => 'form-control',
							  "required"=>"required"
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">13. No. HP</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'hp',
							  'id'          => 'hp',
							  'class'       => 'form-control'
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-thumbs-up"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">14. Email</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'email',
							  'id'          => 'email',
							  'class'       => 'form-control'
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-thumbs-up"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">15. Jenis Kelamin</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$options = array(
							  '00'  => 'Pilih Jenis Kelamin',
							  'laki-laki'  => 'Laki-laki',
							  'perempuan'    => 'Perempuan',
							);
							$style = 'class="form-control"';
							echo form_dropdown('tahunlahir', $options, '', $style);
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">16. Agama</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data=array('Pilih Agama');
							foreach($agama as $value){
								$id= $value->id;
								$keterangan = $value->keterangan;
								$data[]= $keterangan;
							}
							$style = 'class="form-control"';
							echo form_dropdown('agama', $data, '', $style);
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">17. Asal Perguruan Tinggi</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'kampus',
							  'id'          => 'kampus',
							  'class'       => 'form-control',
							  "required"=>"required"
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>



                <!--div class="form-group">
                    <label for="InputMessage">Enter Message</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div-->


                <input type="submit" name="submit" id="submit" value="Preview" class="btn btn-info pull-right">
            </div>
        </form>
    </div>
</div>
<!-- Registration form - END -->
