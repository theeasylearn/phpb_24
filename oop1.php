<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .container {
            max-width: 500px;
            margin: auto;
        }

        label,
        input,
        button {
            display: block;
            width: 100%;
            margin: 10px 0;
        }

        button {
            width: auto;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>SIP Calculator</h1>
        <form id="sipForm" method="post" action="oop1.php">
            <label for="monthlyInvestment">Monthly Investment Amount</label>
            <input name="amount" type="number" id="monthlyInvestment" required>

            <label for="annualInterestRate">Annual Interest Rate (%)</label>
            <input name="rate" type="number" id="annualInterestRate" step="0.01" required>

            <label for="investmentDuration">Investment Duration (Years)</label>
            <input name="year" type="number" id="investmentDuration" required>

            <button type="submit" name="submit">Calculate</button>
        </form>
        <?php
        class SIP
        {
            //instance variable/property
            private $amount, $rate, $year, $invested_amount, $estimated_returns, $total_value;
            public function setAmount($amount)
            {
                $this->amount = $amount;
            }
            public function setRate($rate)
            {
                $this->rate = $rate;
            }
            public function setYear($year)
            {
                $this->year = $year;
            }
            public function calculate()
            {
                $this->invested_amount = $this->amount * 12 * $this->year;
                //local variable
                $monthly_rate = $this->rate / (12 * 100);
                $this->total_value = round($this->amount * ((((1 + $monthly_rate) ** ($this->year * 12)) - 1) * (1 + $monthly_rate)) / $monthly_rate, 2);
                $this->estimated_returns = $this->total_value - $this->invested_amount;
            }
            public function display()
            {
                echo "<br/> estimated returns = " . $this->estimated_returns;
                echo "<br/> total value = " . $this->total_value;
            }
        }
        if (isset($_POST['submit']) == true) {
            extract($_POST);
            $i = new SIP;
            $i->setAmount($amount);
            $i->setRate($rate);
            $i->setYear($year);
            $i->calculate();
            $i->display();
        }
        ?>
        <h2 id="result"></h2>
    </div>
</body>

</html>