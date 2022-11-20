export class Me {
    public static from(values: Me) {
        return new Me({
            id: values.id,
            name: values.name,
            name_kana: values.name_kana,
            email: values.email,
            gender_id: values.gender_id,
        });
    }

    public id: string = "";
    public name: string = "";
    public name_kana: string = "";
    public email: string = "";
    public gender_id: number = 0;

    constructor(props: Partial<Me>) {
        Object.assign(this, props);
    }
}
