	if (Convert == 2){
		Input = Tekst;
	
		for (i=0; i< Input.length; i++){
			bSlovo = false;
			for(j=0; j<LetterCir.length; j++){
				if (LetterCir[j] == Input.charAt(i)){	
					Exit = Exit +	LetterLat[j];

					bSlovo = true;
					break;
				}
			}
			if (!bSlovo)
				Exit = Exit + Input.charAt(i)
		}
		return Exit;
	}
