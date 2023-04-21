<h3>Главная страница</h3>

<h4>Конфигуратор входной двери</h4>
<div class="main flex">
    <div class="doors flex">
        <div class="door">
            <div class="door_left flex">
                <div class="left-handle"></div>
            </div>
            <p class="door__description">Вид снаружи</p>
        </div>
        <div class="door">
            <div class="door_right flex opening-active">
                <div class="right-handle"></div>
            </div>
            <p class="door__description">Вид изнутри</p>
        </div>

    </div>
    <div class="params">
        <h4 class="params-title">Параметры</h4>
        <form action="#" class="form-control">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="color" class="col-form-label">Цвет покраски</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="color" id="color" required>
                        <option selected disabled></option>
                        <option value="red">Красный</option>
                        <option value="green">Зеленый</option>
                        <option value="blue">Синий</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="skin_color" class="col-form-label">Цвет пленки</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="skin_color" id="skin_color" required>
                        <option selected disabled></option>
                        <option value="red">Красный</option>
                        <option value="green">Зеленый</option>
                        <option value="blue">Синий</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Цвет ручки</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="handle_color" id="handle_color" required>
                        <option selected disabled></option>
                        <option value="red">Красный</option>
                        <option value="green">Зеленый</option>
                        <option value="blue">Синий</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Ширина двери</label>
                </div>
                <div class="col-auto">
                    <input type="number" min="100" max="1500" step="10" required>
                    <span>мм</span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Высота двери</label>
                </div>
                <div class="col-auto">
                    <input type="number" min="100" max="2500" step="10" required>
                    <span>мм</span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Открывание</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="opening" id="opening" required>
                        <option selected disabled></option>
                        <option value="flex-start">Левое</option>
                        <option value="flex-end">Правое</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Аксессуары</label>
                </div>
                <div class="col-auto">
                    <select multiple size="3" class="form-select" aria-label="Default select example" name="opening" id="opening" required>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Отправить комплектацию</button>
        </form>
    </div>
</div>