var my_slider = document.querySelector("#slider");

noUiSlider.create(slider, {
    start: [25000, 75000],
    connect: true,
    range: {
        'min': 0,
        'max': 100000,
    },
    step: 500,
    tooltips: [
        true,true
    ]
});
my_slider.noUiSlider.on('start', function () {
    set_values(values);
});

my_slider.noUiSlider.on('update', function (values) {

    set_values(values);
});

my_slider.noUiSlider.on('change', function (values, handle) {
    set_values(values);
});

function set_values(values) {
    var min = document.querySelector("#min");
    let max = document.querySelector("#max");
    min.value = values[0];
    max.value = values[1];
    console.log(values)
}

/*my_slider.noUiSlider.on('change', function () {
    var tooltips = document.querySelectorAll('.noUi-tooltip');
    tooltips.forEach(function (tooltip) {
      setTimeout(function () {
        tooltip.style.display = 'none';
      }, 2000); // Ocultar el tooltip después de 2 segundos
    });
  });
  */