<h1 align="center">Army Battle</h1>


## O zadatku
<p>Program simulira bitku između dvije vojske (Crvene i Plave).<br/>
Svaku rundu se bore vojnik iz Crvene vojske i vojnik iz Plave vojske.<br/>
Slučajnim odabirom se određuje tko napada, a tko se brani te koliki će se damage nanositi.<br/>
Kada vojnik iz jedne vojske umre, ulazi drugi i tako sve dok jedna od vojski ne ostane bez vojnika.</p>


## Random Earthquake
<p>Svaku bitku se generira nasumičan broj od 1 do 8 koji predstavlja earthquake.<br/>
Tijekom prolaza kroz while petlju, provjerava se je li taj broj jednak 5 te ako je, program se zaustavlja i svi vojnici umiru.</p>


## Analysis page
<p>Dodao sam i dodatnu (analysis.php) stranicu koja radi sve isto, ali je moguće vidjeti detalje izvođenja programa.<br/>
Ispisuje se koji vojnik (iz koje vojske) trenutno napada, koliki damage nanosi protivniku te trenutno stanje healtha.<br/>
Kako bi analysis.php pravilno radio, potrebno je otkomentirati dva reda u class/army1.php i u class/army2.php.</p>
