<?php

namespace App\Http\Livewire\Admin;

use App\Models\Image;
use App\Models\Section;
use App\Models\SectionType;
use Livewire\Component;

class LandingCreate extends Component
{
    public $name;
    public $newSection = [
        'type',
        'settings' => null,
    ];
    public $sections = [];
    public $sectionType;

    public function updated($sectionType, $newValue)
    {
        $this->updateSettingStructure($newValue);
    }

    public function updateSettingStructure($type)
    {
        switch ($type) {
            case '1': // Hero
                $this->newSection['settings'] = [
                    'imageurl' => null,
                    'title'    => null,
                    'text'     => null,
                ];
                break;
            case '2': // Card
                $this->newSection['type'] = $type;
                $this->newSection['settings'] = ['card' => []];
                break;
            case '3': // History
                $this->newSection['settings'] = [
                    'text' => null,
                    'link' => null,
                    'icon' => [
                        'icon'  => null,
                        'size'  => null,
                        'color' => null,
                    ],
                    'card' => [
                        'imageurl' => null,
                        'title'    => null,
                        'text'     => null,
                    ],
                ];
                break;
            case '4': // Square Text
                $this->newSection['settings'] = [
                    'background' => null,
                    'title'      => null,
                    'text'       => null,
                    'icon'       => [
                        'icon'  => null,
                        'size'  => null,
                        'color' => null,
                    ],
                ];
                break;
            case '5': // Members
                $this->newSection['settings'] = [
                    'title'   => null,
                    'text'    => null,
                    'members' => [],
                ];
                break;
            case '6': // Footer
                dd('footer');
                break;
        }
    }

    public function addSection()
    {
        if ($this->validateSection()) {
            $this->newSection['type'] = $this->sectionType;
            array_push($this->sections, $this->newSection);
            $this->sectionType = 0;
        }
    }

    public function validateHero()
    {
        return $this->newSection['settings']['imageurl'] !== null && $this->newSection['settings']['text'] !== null && $this->newSection['settings']['title'] !== null;
    }

    public function validateCard()
    {
        return count($this->newSection['settings']['cards']) > 0;
    }

    public function validateHistory()
    {
        return $this->newSection['settings']['text'] !== null && $this->newSection['settings']['card']['imageurl'] !== null;
    }

    public function validateSquareText()
    {
        return $this->newSection['settings']['title'] !== null && $this->newSection['settings']['text'] !== null;
    }

    public function validateMembers()
    {
        return $this->newSection['settings']['title'] !== null && $this->newSection['settings']['text'] !== null && count($this->newSection['settings']['cards']) > 0;
    }

    public function validateSection()
    {
        switch ($this->sectionType) {
            case '1': // Hero
                return $this->validateHero();
            case '2': // Card
                return $this->validateCard();
            case '3': // History
                return $this->validateHistory();
            case '4': // Square Text
                return $this->validateSquareText();
            case '5': // Members
                return $this->validateMembers();
            case '6': // Footer
                dd('footer');
                break;
        }
    }

    function render()
    {
        $sectionTypes
            = SectionType::all();
        $images = Image::all();

        return view('livewire.admin.landing-create', compact('sectionTypes', 'images'));
    }
}
