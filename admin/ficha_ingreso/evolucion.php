<div class="ficha panel panel-default" id="evolucion_tratamiento">
  	<div class="panel-body">
	  	<form>

	    	<button class="btn btn-success active subtitulo" type="button" id="sec_respiratorio"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Soporte Respiratorio <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Si duración de soporte es < 1 día, ingresar sólo horas.<br>Si duración de soporte es > 1 día, ingresar días completos."></span></button>

	    	<button class="btn btn-default  subtitulo" type="button" id="sec_medicamentos"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Medicamentos</button>

	    	<button class="btn btn-default  subtitulo" type="button" id="sec_cateteres"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Catéteres <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Si duración es < 1 día, ingresar sólo horas.<br>Si duración es > 1 día, ingresar días completos."></span></button>

	    	<button class="btn btn-default  subtitulo" type="button" id="sec_cirugia"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Cirugía</button>

	    	<button class="btn btn-default  subtitulo" type="button" id="sec_alimentacion"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Alimentación</button>

	    	<button class="btn btn-default  subtitulo" type="button" id="sec_observaciones"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Observaciones</button>

	    	<div id="respiratorio"> 

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="vm_convencional" class="col-lg-5 control-label">VM Convencional</label>
			          	<label for="vm_convencional" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="vm_convencional" value="si" id="vm_convencional_si"> Sí
			          	</label>
			          	<label for="vm_convencional" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="vm_convencional" value="no" id="vm_convencional_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form duracion_vm">
			        	<label for="duracion_vm" class="col-lg-5 control-label">Duración VM Conv.</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_vm_horas" class="form-control input-sm detalle_vm_convencional" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
          				</div>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_vm_dias" class="form-control input-sm detalle_vm_convencional" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>

        				<div class="checkbox">
				            <label for="" class="control-label txt_izq col-lg-8 margin-left">
				              <input type="checkbox" value="uci_intubado" class="detalle_vm_convencional">
				              Ingreso a UCI intubado
				            </label>
				            <label for="" class="control-label txt_izq col-lg-8 margin-left">
				              <input type="checkbox" value="terapia_sdr" class="detalle_vm_convencional">
				              Terapia SDR
				            </label>
				            <label for="" class="control-label txt_izq col-lg-8 margin-left">
				              <input type="checkbox" value="otro" class="detalle_vm_convencional">
				              Otro
				            </label>
				        </div>
				    </div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="vm_alta_frecuencia" class="col-lg-5 control-label">VM Alta Frecuencia</label>
			          	<label for="vm_alta_frecuencia" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="vm_alta_frecuencia" value="si" id="vm_alta_frecuencia_si"> Sí
			          	</label>
			          	<label for="vm_alta_frecuencia" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="vm_alta_frecuencia" value="no" id="vm_alta_frecuencia_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form duracion_vm_alta">
			        	<label for="duracion_vm_alta" class="col-lg-5 control-label">Duración VM Alta Frec.</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_vm_alta_horas" class="form-control input-sm detalle_vm_alta_frecuencia" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
          				</div>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_vm_alta_dias" class="form-control input-sm detalle_vm_alta_frecuencia" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>
        			</div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="uso_oxigeno" class="col-lg-5 control-label">Uso de oxígeno</label>
			          	<label for="uso_oxigeno" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="uso_oxigeno" value="si" id="uso_oxigeno_si"> Sí
			          	</label>
			          	<label for="uso_oxigeno" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="uso_oxigeno" value="no" id="uso_oxigeno_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form duracion_oxigeno">
			        	<label for="duracion_oxigeno" class="col-lg-5 control-label">Duración oxígeno</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_oxigeno_horas" class="form-control input-sm detalle_duracion_oxigeno" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
          				</div>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_oxigeno_dias" class="form-control input-sm detalle_duracion_oxigeno" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>
        			</div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="cpap" class="col-lg-5 control-label">CPAP</label>
			          	<label for="cpap" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="cpap" value="si" id="cpap_si"> Sí
			          	</label>
			          	<label for="vm_convencional" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="cpap" value="no" id="cpap_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form duracion_cpap">
			        	<label for="duracion_cpap" class="col-lg-5 control-label">Duración CPAP</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_cpap_horas" class="form-control input-sm detalle_cpap" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
          				</div>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_cpap_dias" class="form-control input-sm detalle_cpap" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>

        				<div class="checkbox">
			            	<label for="" class="control-label txt_izq col-lg-12 margin-left">
			              		<input type="checkbox" value="inicio_sdr" class="detalle_cpap" id="inicio_sdr">
			              		Trat. inicio SDR
			            	</label>
			            	
			            	<div class="clearfix visible-lg-block"></div>

			            	<div class="col-lg-offset-1 col-lg-11 sub-form detalle_inicio_sdr">

			            		<label for="detalle_inicio_sdr" class="control-label radio-inline col-lg-12">
					            	<input type="radio" name="detalle_inicio_sdr" value="si" id=""> Profiláctico
					          	</label>
					          	<div class="clearfix visible-lg-block"></div>
					          	<label for="detalle_inicio_sdr" class="control-label radio-inline col-lg-12" >
					            	<input type="radio" name="detalle_inicio_sdr" value="no" id=""> Terapéutico
					          	</label>

			            	</div>

			            	<label for="" class="control-label txt_izq col-lg-12 margin-left">
			              		<input type="checkbox" value="post_extubacion" class="detalle_cpap">
			             		Post extubación
			            	</label>
			            	<label for="" class="control-label txt_izq col-lg-12 margin-left">
			              		<input type="checkbox" value="apnea" class="detalle_cpap">
			              		Trat. apnea
			            	</label>
			          	</div>
			        </div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="vnni" class="col-lg-5 control-label">Vent. nasal no invasiva (VNNI)</label>
			          	<label for="vnni" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="vnni" value="si" id="vnni_si"> Sí
			          	</label>
			          	<label for="vnni" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="vnni" value="no" id="vnni_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form duracion_vnni">
			        	<label for="duracion_vnni" class="col-lg-5 control-label">Duración VNNI</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_vnni_horas" class="form-control input-sm detalle_duracion_vnni" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
          				</div>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="duracion_vnni_dias" class="form-control input-sm detalle_duracion_vnni" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>
        			</div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="hemorragia_pulmonar" class="col-lg-5 control-label">Hemorragia Pulmonar</label>
			          	<label for="hemorragia_pulmonar" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="hemorragia_pulmonar" value="si" id="hemorragia_pulmonar_si"> Sí
			          	</label>
			          	<label for="vnni" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="hemorragia_pulmonar" value="no" id="hemorragia_pulmonar_no"> No
			          	</label>
			        </div>

	    		</div>

	    	</div>

	    	<div id="medicamentos"> 

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="surfactante" class="col-lg-5 control-label">Recibe Surfactante</label>
			          	<label for="surfactante" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="surfactante" value="si" id="surfactante_si"> Sí
			          	</label>
			          	<label for="surfactante" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="surfactante" value="no" id="surfactante_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form detalle_surfactante">

			        	<div class="checkbox">
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="profilactico" class="detalle_surfactante">
				              Profiláctico
				            </label>
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="selectivo" class="detalle_surfactante">
				              Selectivo
				            </label>
				            <label for="" class="control-label txt_izq col-lg-12 margin-left"> 
				              <input type="checkbox" value="insure" class="detalle_surfactante">
				              Insure <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Intubación - Surfactante - Extubación a CPAP."></span>
				            </label>
				        </div>

			        	<label for="hrs_dosis" class="col-lg-6 control-label">Edad 1° dosis Surf</label>
          				<div class="col-lg-5 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="hrs_dosis" class="form-control input-sm detalle_surfactante" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
          				</div>
          				<label for="dosis" class="col-lg-6 control-label">N° dosis Surfactante</label>
          				<div class="col-lg-5 input-group linea">
            				<select name="num_dosis" class="form-control input-sm detalle_surfactante" id="">
			                	<option value="0">Seleccione</option>
			                	<option value="1">1</option>
			                </select> 
          				</div>
				    </div>

			    </div>


			    <div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="indometacina" class="col-lg-5 control-label">Indometacina</label>
			          	<label for="indometacina" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="indometacina" value="si" id="indometacina_si"> Sí
			          	</label>
			          	<label for="indometacina" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="indometacina" value="no" id="indometacina_no"> No
			          	</label>
			          	<label for="indometacina" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="indometacina" value="s_i" id="indometacina_s_i"> S/I
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form detalle_indometacina">

			        	<div class="checkbox">
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="profilactico" class="detalle_indometacina">
				              Profiláctico
				            </label>
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="tratamiento" class="detalle_indometacina">
				              Tratamiento
				            </label>
				        </div>

				    </div>

			    </div>


			    <div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="tratamiento_apnea" class="col-lg-5 control-label">Tratamiento Apnea</label>
			          	<label for="tratamiento_apnea" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="tratamiento_apnea" value="si" id="tratamiento_apnea_si"> Sí
			          	</label>
			          	<label for="tratamiento_apnea" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="tratamiento_apnea" value="no" id="tratamiento_apnea_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form detalle_tratamiento_apnea">

			        	<div class="checkbox">
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="cafeina" class="detalle_tratamiento_apnea">
				              Cafeína
				            </label>
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="aminofilina" class="detalle_tratamiento_apnea">
				              Aminofilina - teofilina
				            </label>
				        </div>

				    </div>

			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="paracetamol" class="col-lg-5 control-label">Paracetamol</label>
			          	<label for="paracetamol" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="paracetamol" value="si" id="paracetamol_si"> Sí
			          	</label>
			          	<label for="paracetamol" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="paracetamol" value="no" id="paracetamol_no"> No
			          	</label>
			          	<label for="paracetamol" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="paracetamol" value="no" id="paracetamol_s_i"> S/I
			          	</label>
			        </div>
			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="ibuprofeno" class="col-lg-5 control-label">Ibuprofeno</label>
			          	<label for="ibuprofeno" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="ibuprofeno" value="si" id="ibuprofeno_si"> Sí
			          	</label>
			          	<label for="ibuprofeno" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="ibuprofeno" value="no" id="ibuprofeno_no"> No
			          	</label>
			          	<label for="ibuprofeno" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="ibuprofeno" value="no" id="ibuprofeno_s_i"> S/I
			          	</label>
			        </div>
			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="corticoides" class="col-lg-5 control-label">Corticoides post natal</label>
			          	<label for="corticoides" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="corticoides" value="si" id="corticoides_si"> Sí
			          	</label>
			          	<label for="corticoides" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="corticoides" value="no" id="corticoides_no"> No
			          	</label>
			        </div>
			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="antibioticos" class="col-lg-5 control-label">Antib. < 72 horas</label>
			          	<label for="antibioticos" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="antibioticos" value="si" id="antibioticos_si"> Sí
			          	</label>
			          	<label for="antibioticos" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="antibioticos" value="no" id="antibioticos_no"> No
			          	</label>
			        </div>
			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="eritropoyetina" class="col-lg-5 control-label">Eritropoyetina</label>
			          	<label for="eritropoyetina" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="eritropoyetina" value="si" id="eritropoyetina_si"> Sí
			          	</label>
			          	<label for="eritropoyetina" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="eritropoyetina" value="no" id="eritropoyetina_no"> No
			          	</label>
			        </div>
			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="oxido" class="col-lg-5 control-label">Óxido Nítrico</label>
			          	<label for="oxido" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="oxido" value="si" id="oxido_si"> Sí
			          	</label>
			          	<label for="oxido" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="oxido" value="no" id="oxido_no"> No
			          	</label>
			        </div>
			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="num_transfusiones" class="col-lg-5 control-label">N° transfusiones <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Registrar sólo transfusiones de glóbulos rojos o sangre."></span></label>
			          	<div class="col-lg-3">
			          		<input type="number" min="1" step="1" name="num_transfusiones" class="form-control input-sm">
			          	</div>
			        </div>
			    </div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="num_cursos" class="col-lg-5 control-label">N° cursos antibióticos</label>
			          	<div class="col-lg-3">
			          		<input type="number" min="1" step="1" name="num_cursos" class="form-control input-sm">
				        </div>
				    </div>
				</div>

			    <div class="col-lg-12">
	    			<div class="form-group col-lg-6">
			          	<label for="eg_post_natal" class="col-lg-5 control-label">EG Post natal término xantinas</label>
			          	<div class="input-group linea col-lg-3">
			          		<input type="number" min="1" max="999" step="1" name="eg_post_natal" class="form-control input-sm" aria-describedby="basic-addon2">
                    		<span class="input-group-addon" id="basic-addon2">sem.</span>
                    	</div>
			        </div>
			    </div>

	    	</div>

	    	<div id="cateteres">

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="arteria" class="col-lg-5 control-label">Arteria umbilical</label>
			          	<label for="arteria" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="arteria" value="si" id="arteria_si"> Sí
			          	</label>
			          	<label for="arteria" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="arteria" value="no" id="arteria_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 detalle_arteria sub-form">

			        	<label for="hrs_arterial" class="col-lg-5 control-label">Duración Cat. Arterial</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="hrs_arterial" class="form-control input-sm detalle_arteria" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
            			</div>
            			<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="dias_arterial" class="form-control input-sm detalle_arteria" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>
				    </div>

			    </div>

			    <div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="vena" class="col-lg-5 control-label">Vena umbilical</label>
			          	<label for="vena" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="vena" value="si" id="vena_si"> Sí
			          	</label>
			          	<label for="vena" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="vena" value="no" id="vena_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 sub-form detalle_vena">

			        	<label for="hrs_vena" class="col-lg-5 control-label">Duración Cat. Venoso</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="hrs_vena" class="form-control input-sm detalle_vena" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
            			</div>
            			<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="dias_vena" class="form-control input-sm detalle_vena" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>
				    </div>

			    </div>

			    <div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="venoso_central" class="col-lg-5 control-label">Venoso central</label>
			          	<label for="venoso_central" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="venoso_central" value="si" id="venoso_central_si"> Sí
			          	</label>
			          	<label for="venoso_central" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="venoso_central" value="no" id="venoso_central_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 detalle_venoso_central sub-form">

			        	<label for="hrs_venoso_central" class="col-lg-5 control-label">Duración Cat. Venoso</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="hrs_venoso_central" class="form-control input-sm detalle_venoso_central" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
            			</div>
            			<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="dias_venoso_central" class="form-control input-sm detalle_venoso_central" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>
				    </div>

			    </div>

			    <div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="percutaneo" class="col-lg-5 control-label">Percutáneo</label>
			          	<label for="percutaneo" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="percutaneo" value="si" id="percutaneo_si"> Sí
			          	</label>
			          	<label for="percutaneo" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="percutaneo" value="no" id="percutaneo_no"> No
			          	</label>
			        </div>

			        <div class="form-group col-lg-6 detalle_percutaneo sub-form">

			        	<label for="hrs_percutaneo" class="col-lg-5 control-label">Duración Cat. Percutáneo <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Total de horas/días con catéter percutáneo (Silastic) o cateter central (yugular, femoral, o subclavio)."></span></label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="hrs_percutaneo" class="form-control input-sm detalle_percutaneo" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">hrs.</span>
            			</div>
            			<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="dias_percutaneo" class="form-control input-sm detalle_percutaneo" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
          				</div>
				    </div>

			    </div>

	    	</div>

	    	<div id="cirugia">

	    		<table class="table table-bordered" id="tabla_cirugia">
		            <thead>
		            	<tr>
		                	<td class="col-lg-1"></td>
		                	<td class="col-lg-2">Edad</td>
		                	<td class="col-lg-4">Cirugía</td>
		                	<td class="col-lg-4"></td>
		                	<td class="col-lg-1"></td>
		              	</tr>
		            </thead>
		            <tbody>
		              <tr class="fila_oculta">
		                <td></td>
		                <td>
		                  <div class="input-group linea">
		                    <input type="number" min="1" max="999" step="1" name="detalle_cirugia_dias[]" class="form-control input-sm detalle_sepsis_tardia" aria-describedby="basic-addon2">
		                    <span class="input-group-addon" id="basic-addon2">días</span>
		                  </div>
		                </td>
		                  
		                <td>
		                  	<select name="detalle_cirugia[]" class="form-control input-sm detalle_sepsis_tardia detalle_cirugia" id="detalle_cirugia">
		                    	<option value="0">Seleccione</option>
		                    	<option value="1">Cirugía ROP</option>
		                    	<option value="otro">Otro</option>
		                  	</select> 
		                </td>

		                <td>
		                  	<div class="col-lg-5 sub-form detalle_cirugia_otro">
		                    	<label for="detalle_cirugia_otro" class="txt_izq control-label">Si es otro, cuál?</label>
		                  	</div>
		                  	<div class="col-lg-7 detalle_cirugia_otro sub-form">
		                    	<input type="text" name="detalle_cirugia_otro[]" class="form-control input-sm">
		                  	</div>
		                </td>
		                <td><button type="button" class="btn btn-danger btn-xs eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
		              </tr>
		            </tbody>
		        </table>

		        <div class="col-lg-2">
		        	<button type="button" class="btn btn-info" id="agregar_tabla_cirugia">Agregar Cirugía</button>
		        </div>

	    	</div>

	    	<div id="alimentacion"> 

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">

			        	<label for="alimentacion" class="col-lg-5 control-label">Total alim. parenteral</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="alimentacion" class="form-control input-sm" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
            			</div>
				    </div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">

			        	<label for="aminoacidos" class="col-lg-5 control-label">Edad inicio aminoácidos</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="aminoacidos" class="form-control input-sm" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
            			</div>
				    </div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">

			        	<label for="lipidos" class="col-lg-5 control-label">Edad inicio lípidos</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="lipidos" class="form-control input-sm" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
            			</div>
				    </div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">

			        	<label for="enteral" class="col-lg-5 control-label">Edad inicio alim. enteral</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="enteral" class="form-control input-sm" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
            			</div>
				    </div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">

			        	<label for="enteral_100" class="col-lg-5 control-label">Edad 100 ml/kg alim. enteral</label>
          				<div class="col-lg-3 input-group linea">
            				<input type="number" min="1" max="100" step="1" name="enteral_100" class="form-control input-sm" aria-describedby="basic-addon2">
            				<span class="input-group-addon" id="basic-addon2">días</span>
            			</div>
				    </div>

	    		</div>

	    		<div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="leche" class="col-lg-5 control-label">Leche Materna durante hospitalización</label>
			          	<label for="leche" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="leche" value="si" id="leche_si"> Sí
			          	</label>
			          	<label for="leche" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="leche" value="no" id="leche_no"> No
			          	</label>
			        </div>
			    </div>

			    <div class="col-lg-9 sub-form detalle_leche">

			        <div class="form-group">
				        <table>
				        	<thead>
				        		<tr>
				        			<td colspan="2" class="col-lg-6">Fórmula</td>
				        			<td colspan="2" class="col-lg-6">Leche Materna</td>
				        		</tr>
				        	</thead>
				        	<tbody>
				        		<tr>
				        			<td class="col-lg-3">A los 7 días</td>
				        			<td class="col-lg-3">
				        				<div class="input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="formula_7_dias" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        			<td class="col-lg-3">A los 7 días</td>
				        			<td class="col-lg-3">
				        				<div class="input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="materna_7_dias" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        		</tr>

				        		<tr>
				        			<td class="col-lg-3">A los 14 días</td>
				        			<td class="col-lg-3">
				        				<div class="input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="formula_14_dias" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        			<td class="col-lg-3">A los 14 días</td>
				        			<td class="col-lg-3">
				        				<div class=" input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="materna_14_dias" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        		</tr>

				        		<tr>
				        			<td class="col-lg-3">A los 28 días</td>
				        			<td class="col-lg-3">
				        				<div class=" input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="formula_28_dias" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        			<td class="col-lg-3">A los 28 días</td>
				        			<td class="col-lg-3">
				        				<div class="input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="materna_28_dias" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        		</tr>

				        		<tr>
				        			<td class="col-lg-3">A las 36 semanas o alta</td>
				        			<td class="col-lg-3">
				        				<div class="input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="formula_36_sem" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        			<td class="col-lg-3">A las 36 semanas o alta</td>
				        			<td class="col-lg-3">
				        				<div class="input-group linea">
				            				<input type="number" min="1" max="100" step="1" name="materna_36_sem" class="form-control input-sm detalle_leche" aria-describedby="basic-addon2">
				            				<span class="input-group-addon" id="basic-addon2">ml/kg/día</span>
				            			</div>
				        			</td>
				        		</tr>


				        	</tbody>
				        </table>
			        </div>


			    </div>

			    <div class="col-lg-12">

	    			<div class="form-group col-lg-6">
			          	<label for="leche_fortificante" class="col-lg-5 control-label">Fortificante leche materna</label>
			          	<label for="leche_fortificante" class="control-label radio-inline col-lg-2">
			            	<input type="radio" name="leche_fortificante" value="si" id=""> Sí
			          	</label>
			          	<label for="leche_fortificante" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="leche_fortificante" value="no" id=""> No
			          	</label>
			          	<label for="leche_fortificante" class="control-label radio-inline col-lg-2" >
			            	<input type="radio" name="leche_fortificante" value="no" id=""> S/I
			          	</label>
			        </div>

			    </div>

	    	</div>

	    	<div id="observaciones">
	    		<div class="col-lg-12">
	    			<div class="form-group">
			          	<label for="vm_convencional" class="col-lg-5 control-label">
Observaciones evol. y tratamiento</label>
		            	<div>
		                  <textarea class="form-control" name="observaciones_alimentacion" rows="5"></textarea>
		              </div>
			        </div>
	    		</div>
	    	</div>

	    	<div class=" col-lg-offset-10 col-lg-2">
	          	<button type="submit" class="btn btn-success">Guardar</button>
	        </div> 
	  	</form>
	</div>
</div>
