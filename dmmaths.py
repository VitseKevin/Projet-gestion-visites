
def checkIfMdpValide(motdepasse):
    chiffres=0
    lettres=0
    carspecial=0

    if len(motdepasse)<8 or len(motdepasse)>12:
        return "Le mot de passe ne correspond pas aux critères"
    
    for char in motdepasse:

        if char.isdigit():
            chiffres+=1
        elif char.isalpha():
            lettres+=1
        else:
            carspecial+=1

    if chiffres >=3 and carspecial >=3:
        return "Mot de passe valide"
    elif lettres >= 5:
        return "Mot de passe valide"
    elif chiffres <3 and lettres >=5 and carspecial >=3:
        return "Mot de passe valide"
    else:
        return "Mot de passe invalide"


print (checkIfMdpValide("vae*3bl"))