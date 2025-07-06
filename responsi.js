   const items = ['Produk A', 'Produk B', 'Artikel C', 'Artikel D'];
   
   function searchItems() {
       const query = document.getElementById('search').value.toLowerCase();
       const results = items.filter(item => item.toLowerCase().includes(query));
       displayResults(results);
   }

   function displayResults(results) {
       const resultsDiv = document.getElementById('results');
       resultsDiv.innerHTML = results.map(item => `<p>${item}</p>`).join('');
   }
   