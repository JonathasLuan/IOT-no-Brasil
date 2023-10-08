<footer id="footer">
    <span>&copy; 2023 IoTudo</span>
    <?php
    if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
        echo "session_id: " . session_id() . "<br>";
    }
    ?>
    <br>
    <div id="switch">
        <span>light</span>
        <label class="switch">
            <input type="checkbox" id="theme-toggle-btn">
            <span class="slider round"></span>
        </label>
        <span>dark</span>
        <?php
        // Verifica se a variável de sessão está definida
        if (isset($_SESSION['darkMode'])) {
            // Exibe o valor da variável de sessão
            echo $_SESSION['darkMode'];
        } else {
            // Valor padrão caso a variável de sessão não esteja definida
            echo "darkMode não definido";
        }
        ?>
    </div>

</footer>