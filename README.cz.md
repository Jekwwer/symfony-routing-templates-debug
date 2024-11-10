# Základy Symfony: Směrování, Šablony a Ladění

### Přehled Projektu

Tento projekt je založen na [Symfony šabloně](https://github.com/Jekwwer/symfony-template) a zahrnuje úkoly, které pomáhají seznámit se se základními funkcemi Symfony, jako jsou controllery, šablony Twig, parametry v URL a nástroje pro ladění. Každý úkol je zaměřen na praktickou implementaci a posílení znalostí v těchto oblastech.

---

> Tento projekt je vytvořen jako součást cvičení pro kurz VŠPJ "WT - Webové technologie" 2024-2025, Cvičení 8.

---

### Zahrnuté Úkoly

1. **Vytvoření Menu v Twigu**
   Nastavení navigačního menu v Twigu pro přístup k jednotlivým cvičením v rámci projektu.

2. **Definování Getteru pro Zobrazení URL Parametrů**
   Implementace funkce getter v Symfony controlleru pro zpracování a zobrazení parametrů z URL.

3. **Dědění Twig Šablon**
   Konfigurace `index.html.twig` k dědění z `base.html.twig` pro konzistentní rozložení stránek.

4. **Odeslání Velkých Písmen do Twigu a Použití Filtru**
   Předání textu z controlleru do šablony Twig, aplikace filtru pro zobrazení textu malými písmeny.

5. **Ladění pomocí `dump` v Controlleru**
   Procvičování ladění pomocí funkce `dump()` v controlleru pro zobrazení obsahu proměnných a polí.

## Instalace

Pro správné nastavení prostředí si nainstalujte PHP, Composer a Symfony CLI. Po naklonování tohoto repozitáře spusťte následující příkazy:

```bash
# Spuštění Symfony serveru
make serve
```

### Použití

Každé cvičení je dostupné přes specifické routy definované v controllerech. Navigovat se můžete buď zadáním URL adresy, nebo pomocí menu nastaveného v `base.html.twig`.
