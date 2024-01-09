# PHP HOTELS

#### CONSEGNA DELL'ESERCIZIO 

```
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G

Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale.

Prima stampate in pagina i dati, senza preoccuparvi dello stile.

Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

BONUS
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA
deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore). Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
```

#### SVOLGIMENTO

Per svolgere l'esercizio iniziamo con il ricopiare sul nostro file .php prima del tag html, tutte le informazioni di cui abbiamo bisogno per eseguire il codice, ovvero l'array dei hotels per ora. Per stampare le informazioni nestiamo due cicli foreach per i quali stampiamo rispettivamente tutte le feature degli hotel e gli hotel stessi. Per farlo in modo più ordinato importiamo tramite CDN Bootstrap e dividiamo tutto in una tabella che avrà come head la tipologia di dati che stampiamo (Nome, descrizione, ecc.) e come body il primo ciclo foreach che scorre gli hotel, il quale crea un tag di apertura e un tag di chiusura di tipo **tr**, all'interno del quale andiamo a dichiarare il secondo foreach, che dentro dei tag **td** andrà a stampare tutte le feature.

Per filtrare l'array creiamo un form di tipo get, che comprende un checkbox per filtrare la presenza di parcheggio, e un input di testo sul quale l'utente dichiarerà il voto a partire dal quale visualizzare gli hotel. Nel tag php dichiariamo 2 variabili: una che prende tramite get il valore booleano del checkbox e una che prendere il valore numerico dell'input.

Dichiariamo due condizioni per le quali se è il checkbox non è checkato, l'unica condizione da seguire sarà il rate del'hotel, ovvero:

```PHP
  if (!$is_parking) {
    foreach ($hotels as $hotel) {
        if ($hotel["vote"] >= $hotel_rate)
        #stampa le feature
```

mentre l'altra condizione, ovvero se è checkato, andremo a verificare anche se il valore della chiave "parking" di ogni hotel è vera, e in quel caso lo stamperemo

```PHP
 elseif ($is_parking) {
    foreach ($hotels as $hotel) {
        if ($hotel["vote"] >= $hotel_rate && $hotel["parking"])
```

In questo modo avremo due filtri che stamperanno o meno le informazioni desiderate.

P.S. Nel codice inseriamo un'ulteriore condizioni che va a modificare la visualizzazione della feature parking, facendoci vedere YES invece di 1 se è presente, altrimenti NO.