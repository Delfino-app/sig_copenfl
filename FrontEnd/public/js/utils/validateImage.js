
export default{

	validateImg(file){

		const img = file;

		const img_name = img.name;
		const img_extension = img_name.split('.').pop().toLowerCase();
		const extension_valida = ['png','jpg','jpeg'];

		const img_size = img.size;

		//Retorno 
		const retorno = {

			status:'',
			info:'',
			message:''
		}

		//Validar Exetensão
		if(jQuery.inArray(img_extension,extension_valida) == -1){

			retorno.status = 400;
			retorno.info = 'Ficheiro de imagem inválido.';
			retorno.message = `São apenas permitidos ficheiros do tipo ${extension_valida[0]}, ${extension_valida[1]} e ${extension_valida[2]}`;
		}
		else if(img_size > 2000000){

			retorno.status = 400;
			retorno.info = 'Ficheiro de imagem muito grande.';
			retorno.message = `O tamanho da imagem não pode ser superior a 2MB`;
		}
		else{

			retorno.status = 200;
			retorno.info = 'Imagem validada com sucesso';
			retorno.message = `Já podes fazer Upload da imagem`;
		}

		return retorno;
	},
	validateFilepdf(file){

		const pdf = file;

		const pdf_name = pdf.name;
		const pdf_extension = pdf_name.split('.').pop().toLowerCase();
		const extension_valida = ['pdf'];

		const pdf_size = pdf.size;

		//Retorno 
		const retorno = {

			status:'',
			info:'',
			message:''
		}

		//Validar Exetensão
		if(jQuery.inArray(img_extension,extension_valida) == -1){

			retorno.status = 400;
			retorno.info = 'Ficheiro inválido.';
			retorno.message = `São apenas permitidos ficheiros do tipo PDF`;
		}
		else if(img_size > 2000000){

			retorno.status = 400;
			retorno.info = 'Ficheiro muito grande.';
			retorno.message = `O tamanho do arquivo não pode ser superior a 2MB`;
		}
		else{
			
			//True
			retorno.status = 200;
		}

		return retorno;
	}
}




