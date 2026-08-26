/**
 * Fuzurra Industries Pvt. Ltd.
 * Interactive Energy Calculators
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Solar ROI Calculator
  initSolarRoiCalculator();

  // 2. PM Surya Ghar Subsidy Calculator
  initPmSuryaGharCalculator();

  // 3. Battery Sizing Calculator
  initBatterySizingCalculator();
});

/* ==========================================================================
   1. SOLAR ROI & SAVINGS CALCULATOR
   ========================================================================== */
function initSolarRoiCalculator() {
  const billSlider = document.getElementById('solarBillSlider');
  const billDisplay = document.getElementById('solarBillDisplay');
  
  if (!billSlider) return;

  function updateSolarCalc() {
    const monthlyBill = parseInt(billSlider.value, 10);
    if (billDisplay) {
      billDisplay.innerText = '₹' + monthlyBill.toLocaleString('en-IN');
    }

    // Assumptions: Avg tariff = ₹7.5 / unit. 1 kW solar generates ~120 units/mo in India.
    const monthlyUnits = monthlyBill / 7.5;
    const recommendedKw = Math.max(1, Math.ceil((monthlyUnits / 120) * 10) / 10); // 1 decimal
    const annualSavings = Math.round(monthlyBill * 12 * 0.92); // ~92% reduction
    const lifetimeSavings25 = Math.round(annualSavings * 25 * 1.15); // accounting for 3% tariff inflation
    const co2Offset = (recommendedKw * 1.25).toFixed(1); // tonnes/year
    const rooftopArea = Math.round(recommendedKw * 80); // ~80 sq.ft per kW

    const kwEl = document.getElementById('calcKwOutput');
    const annualSavEl = document.getElementById('calcAnnualSavingsOutput');
    const lifetimeSavEl = document.getElementById('calcLifetimeSavingsOutput');
    const co2El = document.getElementById('calcCo2Output');
    const areaEl = document.getElementById('calcAreaOutput');

    if (kwEl) kwEl.innerText = `${recommendedKw} kW`;
    if (annualSavEl) annualSavEl.innerText = `₹${annualSavings.toLocaleString('en-IN')}`;
    if (lifetimeSavEl) lifetimeSavEl.innerText = `₹${lifetimeSavings25.toLocaleString('en-IN')}`;
    if (co2El) co2El.innerText = `${co2Offset} Tons/yr`;
    if (areaEl) areaEl.innerText = `${rooftopArea} sq.ft`;
  }

  billSlider.addEventListener('input', updateSolarCalc);
  updateSolarCalc(); // initial calculation
}

/* ==========================================================================
   2. PM SURYA GHAR SUBSIDY CALCULATOR
   ========================================================================== */
function initPmSuryaGharCalculator() {
  const capacitySelect = document.getElementById('pmSuryaCapacitySelect');
  if (!capacitySelect) return;

  function updatePmSuryaCalc() {
    const kw = parseInt(capacitySelect.value, 10);
    let subsidy = 30000;
    let approxCost = 65000;
    let monthlyGenUnits = 120;
    let monthlySavings = 1000;

    if (kw === 1) {
      subsidy = 30000;
      approxCost = 65000;
      monthlyGenUnits = 120;
      monthlySavings = 1050;
    } else if (kw === 2) {
      subsidy = 60000;
      approxCost = 125000;
      monthlyGenUnits = 240;
      monthlySavings = 2100;
    } else if (kw >= 3) {
      subsidy = 78000;
      approxCost = 185000 + (kw - 3) * 55000;
      monthlyGenUnits = kw * 120;
      monthlySavings = Math.round(monthlyGenUnits * 8.5);
    }

    const netCost = approxCost - subsidy;

    const subEl = document.getElementById('pmSubsidyVal');
    const costEl = document.getElementById('pmEstCostVal');
    const netEl = document.getElementById('pmNetCostVal');
    const genEl = document.getElementById('pmUnitsVal');
    const savEl = document.getElementById('pmSavingsVal');

    if (subEl) subEl.innerText = `₹${subsidy.toLocaleString('en-IN')}`;
    if (costEl) costEl.innerText = `₹${approxCost.toLocaleString('en-IN')}`;
    if (netEl) netEl.innerText = `₹${netCost.toLocaleString('en-IN')}`;
    if (genEl) genEl.innerText = `~${monthlyGenUnits} Units`;
    if (savEl) savEl.innerText = `₹${monthlySavings.toLocaleString('en-IN')}/mo`;
  }

  capacitySelect.addEventListener('change', updatePmSuryaCalc);
  updatePmSuryaCalc();
}

/* ==========================================================================
   3. BATTERY SIZING CALCULATOR (LEAD ACID VS LITHIUM)
   ========================================================================== */
function initBatterySizingCalculator() {
  const fansInput = document.getElementById('battFansCount');
  const lightsInput = document.getElementById('battLightsCount');
  const tvInput = document.getElementById('battTvCount');
  const fridgeInput = document.getElementById('battFridgeCount');
  const hoursSlider = document.getElementById('battHoursSlider');
  const hoursDisplay = document.getElementById('battHoursDisplay');

  if (!hoursSlider) return;

  function updateBatteryCalc() {
    const fans = parseInt(fansInput?.value || 0, 10);
    const lights = parseInt(lightsInput?.value || 0, 10);
    const tv = parseInt(tvInput?.value || 0, 10);
    const fridge = parseInt(fridgeInput?.value || 0, 10);
    const hours = parseFloat(hoursSlider.value);

    if (hoursDisplay) {
      hoursDisplay.innerText = `${hours} Hours`;
    }

    // Wattages: Fan=70W, LED=15W, TV=120W, Fridge avg run=150W
    const totalWatts = (fans * 70) + (lights * 15) + (tv * 120) + (fridge * 150) + 100; // 100W baseline router/mobile
    const totalEnergyWh = totalWatts * hours;

    // Lead Acid (12V system, 70% DoD, 80% inverter eff)
    // Ah = (Total Wh) / (12V * 0.70 * 0.80)
    const requiredAhLeadAcid = Math.round(totalEnergyWh / (12 * 0.70 * 0.80));
    
    // Recommended Lead Acid config
    let leadRec = "1x 12V 150Ah Tall Tubular";
    if (requiredAhLeadAcid > 350) {
      leadRec = "2x 12V 200Ah Tall Tubular (24V System)";
    } else if (requiredAhLeadAcid > 180) {
      leadRec = "1x 12V 200Ah / 220Ah Tall Tubular";
    }

    // Lithium LiFePO4 (95% DoD, 95% efficiency)
    const lithiumKwh = (totalEnergyWh / (1000 * 0.90)).toFixed(1);
    let lithiumRec = `${Math.max(1.2, lithiumKwh)} kWh Wall-Mounted LiFePO4`;

    const wattEl = document.getElementById('battTotalWattage');
    const leadEl = document.getElementById('battLeadAcidRec');
    const lithiumEl = document.getElementById('battLithiumRec');

    if (wattEl) wattEl.innerText = `${totalWatts} W`;
    if (leadEl) leadEl.innerText = leadRec;
    if (lithiumEl) lithiumEl.innerText = lithiumRec;
  }

  [fansInput, lightsInput, tvInput, fridgeInput, hoursSlider].forEach(el => {
    if (el) el.addEventListener('input', updateBatteryCalc);
  });

  updateBatteryCalc();
}
