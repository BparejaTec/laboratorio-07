class Animal {
    // Atributos
    private $nombre;
    private $edad;
    private $especie;

    // Constructor
    public function __construct($nombre, $edad, $especie) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->especie = $especie;
    }

    // Métodos
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }


    public function setEspecie($especie) {
        $this->especie = $especie;
    }

    public function hacerSonido() {
        echo "los animales hace un sonido.";
    }
}
