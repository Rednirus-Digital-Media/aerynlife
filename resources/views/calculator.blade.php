<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PTR & PTS Calculator</title>


    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

form {
    display: flex;
    flex-direction: column;
    width: 300px;
}

input[type="number"] {
    height: 24px;
    margin-bottom: 12px;
}

button {
    height: 36px;
    margin-top: 24px;
}

#results {
    margin-top: 24px;
}

#ptr, #pts {
    margin: 0;
}</style>
</head>
<body>
    <h1>PTR & PTS Calculator</h1>

    <form id="calculator">
        <label for="mrp">MRP:</label>
        <input type="number" name="mrp" id="mrp" step="0.01" required><br><br>

        <label for="retail_margin">Retail Margin (%):</label>
        <input type="number" name="retail_margin" id="retail_margin" step="0.01" required><br><br>

        <label for="stockist_margin">Stockist Margin (%):</label>
        <input type="number" name="stockist_margin" id="stockist_margin" step="0.01" required><br><br>

        <label for="gst">GST (%):</label>
        <input type="number" name="gst" id="gst" step="0.01" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <div id="results">
        <p id="ptr"></p>
        <p id="pts"></p>
    </div>

    <script >
    
    document.getElementById("calculator").addEventListener("submit", function (event) {
    event.preventDefault();

    const mrp = parseFloat(document.getElementById("mrp").value);
    const retail_margin = parseFloat(document.getElementById("retail_margin").value);
    const stockist_margin = parseFloat(document.getElementById("stockist_margin").value);
    const gst = parseFloat(document.getElementById("gst").value);

    const gst_factor = 1 + (gst / 100);

    const net_margin = mrp - (mrp * (retail_margin / 100));

    const ptr = net_margin / gst_factor;

    const pts = ptr - (ptr * (stockist_margin / 100));

    document.getElementById("ptr").innerText = "PTR: " + ptr.toFixed(2);
    document.getElementById("pts").innerText = "PTS: " + pts.toFixed(2);
});</script>
</body>
</html>