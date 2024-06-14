<?php
$medicines = array(
    "2-DPMP",
    "2C family",
    "5-IT",
    "Alcohol",
    "Amphetamine",
    "AMT",
    "Amyl nitrate",
    "Anabolic steroids",
    "Benzodiazepines",
    "Benzofuran compounds",
    "Cannabis",
    "Cathinones",
    "Cocaine",
    "Codeine",
    "Dimethyltryptamine",
    "Ecstasy",
    "Gabapentin",
    "GHB & GBL",
    "Glues, gases and aerosols",
    "Heroin",
    "Image and performance enhancing drug (IPEDs)",
    "Ketamine",
    "Khat",
    "LSD",
    "Magic mushrooms",
    "Mephedrone",
    "Mescaline",
    "Methadone",
    "Methamphetamine",
    "Methoxetamine (MXE)",
    "Methylphenidate",
    "N-bomb",
    "Naphyrone",
    "New psychoactive substances",
    "Nicotine",
    "Nitrous oxide",
    "Opiate/Opioid painkillers",
    "PCP",
    "Phenazepam",
    "Piperazines",
    "PMA",
    "Pregabalin",
    "Salvia",
    "Synthetic cannabinoids",
    "Synthetic opioids",
    "Tobacco",
    "Tramadol",
    "Vapes"
);
    $word_to_search = 'Ni';
    foreach($medicines as $medicine)
    {
        if(strpos($medicine,$word_to_search) === 0)
            echo "<br/> $medicine";
    }
?>