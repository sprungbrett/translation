<?php

namespace Sprungbrett\Component\Translation\Model;

interface TranslatableInterface
{
    public function setCurrentLocalization(Localization $currentLocalization): void;

    public function getLocalization(): ?Localization;

    public function getLocale(?Localization $localization = null): string;
}
