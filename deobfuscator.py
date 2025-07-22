from urllib.parse import unquote
import re
alphabet = "%71%77%65%72%74%79%75%69%6f%70%61%73%64%66%67%68%6a%6b%6c%7a%78%63%76%62%6e%6d%51%57%45%52%54%59%55%49%4f%50%41%53%44%46%47%48%4a%4b%4c%5a%58%43%56%42%4e%4d%5f%2d%22%3f%3e%20%3c%2e%2d%3d%3a%2f%31%32%33%30%36%35%34%38%37%39%27%3b%28%29%26%5e%24%5b%5d%5c%5c%25%7b%7d%21%2a%7c"
alphabet = unquote(alphabet) #funcao para decodificar string codificada em URL

#abrindo arquivo em modo de leitura
with open('beautiful.php') as file:
    content = file.read()
    for i in range(0, len(alphabet)):
        if alphabet[i] == '\\':
            content = content.replace(f"$O[{i}]",  "\"" + alphabet[i]*2 + "\"")
        else:
            content = content.replace(f"$O[{i}]",  "\"" + alphabet[i]*1 + "\""  )
       
    content = re.sub(r'\"\s+\.\s+\"', '', content)
    with open("deobfuscated.php", "w") as deob:
        deob.write(content)
